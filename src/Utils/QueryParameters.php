<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Utils;

use ReflectionProperty;

class QueryParameters
{
    /**
     * @param  string  $type
     * @param  mixed  $queryParams
     * @param  array<string,array<string,array<string,string>>>|null  $globals
     * @return ?string
     */
    public function parseQueryParams(string $type, mixed $queryParams, ?array $globals = null): ?string
    {
        $parts = [];

        $fields = array_keys(get_class_vars($type));

        foreach ($fields as $field) {
            $value = $queryParams !== null ? $queryParams->{$field} : null;

            if ($globals !== null) {
                $value = populateGlobal($value, 'queryParam', $field, $globals);
            }

            if ($value === null) {
                continue;
            }

            $requestMetadata = RequestBodies::parseRequestMetadata(new ReflectionProperty($type, $field));
            if ($requestMetadata !== null) {
                continue;
            }

            $metadata = $this->parseQueryParamsMetadata(new ReflectionProperty($type, $field));
            if ($metadata === null) {
                continue;
            }

            if (! empty($metadata->serialization)) {
                $parts[] = $this->parseSerializationParams($metadata, $value);
            } else {
                match ($metadata->style) {
                    'deepObject' => $parts[] = $this->parseDeepObjectParams($metadata, $value),
                    'form' => $parts[] = $this->parseDelimitedParams($metadata, $value, ','),
                    'pipeDelimited' => $parts[] = $this->parseDelimitedParams($metadata, $value, '|'),
                    default => throw new \RuntimeException('Unsupported style '.$metadata->style),
                };
            }
        }

        return empty($parts) ? null : implode('&', $parts);
    }

    /**
     * @param  ParamsMetadata  $metadata
     * @param  mixed  $value
     * @return string
     */
    private function parseSerializationParams(ParamsMetadata $metadata, mixed $value): string
    {
        $queryParams = [];

        switch ($metadata->serialization) {
            case 'json':
                $serializer = JSON::createSerializer();
                $queryParams[$metadata->name] = $serializer->serialize($value, 'json');
                break;
            default:
                throw new \Exception('Unsupported serialization: '.$metadata->serialization);
        }

        return http_build_query($queryParams);
    }

    /**
     * @param  ParamsMetadata  $metadata
     * @param  mixed  $value
     * @return string
     */
    private function parseDeepObjectParams(ParamsMetadata $metadata, mixed $value): string
    {
        $queryParams = [];

        $dateTimeFormat = $metadata->dateTimeFormat;

        switch (gettype($value)) {
            case 'object':
                foreach ($value as $field => $val) { /** @phpstan-ignore-line */
                    if ($val === null) {
                        continue;
                    }

                    $fieldMetaData = $this->parseQueryParamsMetadata(new ReflectionProperty($value::class, $field));
                    if ($fieldMetaData === null) {
                        continue;
                    }

                    $dateTimeFormat = $fieldMetaData->dateTimeFormat;

                    $items = [];

                    if (is_array($val) && array_is_list($val)) {
                        foreach ($val as $item) {
                            $items[] = valToString($item, $dateTimeFormat);
                        }
                    } else {
                        $queryParams[$metadata->name.'['.$fieldMetaData->name.']'] = valToString($val, $dateTimeFormat);
                    }

                    if (count($items) > 0) {
                        $queryParams[$metadata->name.'['.$fieldMetaData->name.']'] = $items;
                    }
                }
                break;
            case 'array':
                if (! array_is_list($value)) {
                    foreach ($value as $key => $val) {
                        if ($val === null) {
                            continue;
                        }

                        $items = [];

                        if (is_array($val) && array_is_list($val)) {
                            foreach ($val as $item) {
                                $items[] = valToString($item, $dateTimeFormat);
                            }
                        } else {
                            $queryParams[$metadata->name.'['.$key.']'] = valToString($val, $dateTimeFormat);
                        }

                        if (count($items) > 0) {
                            $queryParams[$metadata->name.'['.$key.']'] = $items;
                        }
                    }
                }
                break;
        }

        return $this->buildQueryString($queryParams);
    }

    /**
     * @param  ParamsMetadata  $metadata
     * @param  mixed  $value
     * @param  string  $delimiter
     * @return string
     */
    private function parseDelimitedParams(ParamsMetadata $metadata, mixed $value, string $delimiter): string
    {
        $queryParams = [];

        $dateTimeFormat = $metadata->dateTimeFormat;

        switch (gettype($value)) {
            case 'object':
                $items = [];

                foreach ($value as $field => $val) { /** @phpstan-ignore-line */
                    if ($val === null) {
                        continue;
                    }

                    $fieldMetaData = $this->parseQueryParamsMetadata(new ReflectionProperty($value::class, $field));
                    if ($fieldMetaData === null) {
                        continue;
                    }

                    $dateTimeFormat = $fieldMetaData->dateTimeFormat;

                    if ($metadata->explode) {
                        $queryParams[$fieldMetaData->name] = valToString($val, $dateTimeFormat);
                    } else {
                        $items[] = $fieldMetaData->name.$delimiter.valToString($val, $dateTimeFormat);
                    }
                }

                if (count($items) > 0) {
                    $queryParams[$metadata->name] = implode($delimiter, $items);
                }
                break;
            case 'array':
                if (array_is_list($value)) {
                    $values = [];
                    $items = [];

                    foreach ($value as $item) {
                        if ($metadata->explode) {
                            $values[] = valToString($item, $dateTimeFormat);
                        } else {
                            $items[] = valToString($item, $dateTimeFormat);
                        }
                    }

                    if (count($items) > 0) {
                        $values[] = implode($delimiter, $items);
                    }

                    $queryParams[$metadata->name] = $values;
                } else {
                    $items = [];

                    foreach ($value as $key => $val) {
                        if ($val === null) {
                            continue;
                        }

                        if ($metadata->explode) {
                            $queryParams[$key] = valToString($val, $dateTimeFormat);
                        } else {
                            $items[] = $key.$delimiter.valToString($val, $dateTimeFormat);
                        }
                    }

                    if (count($items) > 0) {
                        $queryParams[$metadata->name] = implode($delimiter, $items);
                    }
                }
                break;
            default:
                $queryParams[$metadata->name] = valToString($value, $dateTimeFormat);
        }

        return $this->buildQueryString($queryParams);
    }

    /**
     * @param  array<array<string>|string>  $queryParams
     */
    private function buildQueryString(array $queryParams): string
    {
        ksort($queryParams);

        $parts = [];
        foreach ($queryParams as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $item) {
                    $parts[] = urlencode($key).'='.urlencode($item);
                }
            } else {
                $parts[] = urlencode($key).'='.urlencode($value);
            }
        }

        return implode('&', $parts);
    }

    private function parseQueryParamsMetadata(ReflectionProperty $property): ?ParamsMetadata
    {
        $metadataStr = SpeakeasyMetadata::find($property->getAttributes(SpeakeasyMetadata::class), 'queryParam');
        if ($metadataStr === null) {
            return null;
        }

        $metadata = ParamsMetadata::parse($metadataStr);
        if ($metadata === null) {
            return null;
        }

        return $metadata;
    }
}


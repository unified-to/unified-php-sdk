<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Utils;

use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\JsonSerializationVisitor;

class MixedJSONHandler implements SubscribingHandlerInterface
{
    /** @phpstan-ignore-next-line */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'mixed',
                'method' => 'serializeMixedToJson',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => 'mixed',
                'method' => 'deserializeMixedToJson',
            ],
        ];
    }

    /** @phpstan-ignore-next-line */
    public function serializeMixedToJson(JsonSerializationVisitor $visitor, mixed $any, array $type, Context $context): string
    {
        $serializer = JSON::createSerializer();
        $s = $serializer->serialize($any, 'json');
        $s = ltrim($s, '"');
        $s = rtrim($s, '"');

        return $s;
    }

    /** @phpstan-ignore-next-line */
    public function deserializeMixedToJson(JsonDeserializationVisitor $visitor, mixed $data, array $type, Context $context): mixed
    {
        if (! is_string($data)) {
            return $data;
        }

        $decoded = json_decode($data, true);
        if (json_last_error() === JSON_ERROR_NONE && $data !== $decoded) {
            return $decoded;
        }

        return $data;
    }
}

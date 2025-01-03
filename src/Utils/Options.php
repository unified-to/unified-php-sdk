<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Utils;

use Unified\Unified_to\Utils\Retry\RetryConfig;

class Options
{
    public ?RetryConfig $retryConfig = null;

    /**
     * @var array<string>|null $retryCodes
     */
    public ?array $retryCodes = null;

    public static function builder(): OptionsBuilder
    {
        return new OptionsBuilder();
    }
}

class OptionsBuilder
{
    public Options $options;

    public function __construct()
    {
        $this->options = new Options();
    }

    /**
     * Sets the configuration to use for retries.
     *
     * @param  RetryConfig  $config
     * @return OptionsBuilder
     */
    public function setRetryConfig(RetryConfig $config): OptionsBuilder
    {
        $this->options->retryConfig = $config;

        return $this;
    }

    /**
     * Specifies which HTTP status codes should be retried.
     *
     * @param  array<string>  $codes
     * @return OptionsBuilder
     */
    public function setRetryCodes(array $codes): OptionsBuilder
    {
        $this->options->retryCodes = $codes;

        return $this;
    }

    public function build(): Options
    {
        return $this->options;
    }
}
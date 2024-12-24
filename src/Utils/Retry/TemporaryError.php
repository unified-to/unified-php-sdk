<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Utils\Retry;
use Psr\Http\Message\ResponseInterface;

class TemporaryError extends \Exception
{
    public ?ResponseInterface $response;

    public function __construct(string $message = '', int $code = 0, ?\Throwable $previous = null, ?ResponseInterface $response = null)
    {
        parent::__construct($message, $code, $previous);
        $this->response = $response;
    }
}

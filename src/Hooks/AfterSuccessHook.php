<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace Unified\Unified_to\Hooks;

use Psr\Http\Message\ResponseInterface;

interface AfterSuccessHook
{
    public function afterSuccess(AfterSuccessContext $context, ResponseInterface $response): ResponseInterface;
}

<?php

namespace PrestaShop\Module\PsAccounts\Vendor\Lcobucci\JWT\Encoding;

use JsonException;
use PrestaShop\Module\PsAccounts\Vendor\Lcobucci\JWT\Exception;
use RuntimeException;
final class CannotEncodeContent extends RuntimeException implements Exception
{
    /**
     * @param JsonException $previous
     *
     * @return self
     */
    public static function jsonIssues(JsonException $previous)
    {
        return new self('Error while encoding to JSON', 0, $previous);
    }
}

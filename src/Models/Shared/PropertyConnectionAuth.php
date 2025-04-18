<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** PropertyConnectionAuth - An authentication object that represents a specific authorized user's connection to an integration. */
class PropertyConnectionAuth
{
    /**
     *
     * @var ?string $accessToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('access_token')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accessToken = null;

    /**
     *
     * @var ?string $apiUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('api_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $apiUrl = null;

    /**
     *
     * @var ?string $appId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('app_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $appId = null;

    /**
     *
     * @var ?string $authorizeUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('authorize_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $authorizeUrl = null;

    /**
     *
     * @var ?string $clientId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('client_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $clientId = null;

    /**
     *
     * @var ?string $clientSecret
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('client_secret')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $clientSecret = null;

    /**
     *
     * @var ?string $consumerKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('consumer_key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $consumerKey = null;

    /**
     *
     * @var ?string $consumerSecret
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('consumer_secret')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $consumerSecret = null;

    /**
     *
     * @var ?string $devApiKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dev_api_key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $devApiKey = null;

    /**
     * $emails
     *
     * @var ?array<string> $emails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('emails')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

    /**
     *
     * @var ?float $expiresIn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expires_in')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $expiresIn = null;

    /**
     *
     * @var ?\DateTime $expiryDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expiry_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $expiryDate = null;

    /**
     *
     * @var ?string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $key = null;

    /**
     * $meta
     *
     * @var ?array<string, mixed> $meta
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meta')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $meta = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * When integration.auth_type = "other", this field contains the authentication credentials in the same order as token_names
     *
     * @var ?array<string> $otherAuthInfo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('other_auth_info')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $otherAuthInfo = null;

    /**
     *
     * @var ?string $pem
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pem')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $pem = null;

    /**
     *
     * @var ?string $refreshToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refresh_token')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $refreshToken = null;

    /**
     *
     * @var ?\DateTime $refreshTokenExpiresDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refresh_token_expires_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $refreshTokenExpiresDate = null;

    /**
     *
     * @var ?float $refreshTokenExpiresIn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refresh_token_expires_in')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $refreshTokenExpiresIn = null;

    /**
     *
     * @var ?string $state
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('state')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $state = null;

    /**
     *
     * @var ?string $token
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $token = null;

    /**
     *
     * @var ?string $tokenUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $tokenUrl = null;

    /**
     *
     * @var ?string $userId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $userId = null;

    /**
     * @param  ?string  $accessToken
     * @param  ?string  $apiUrl
     * @param  ?string  $appId
     * @param  ?string  $authorizeUrl
     * @param  ?string  $clientId
     * @param  ?string  $clientSecret
     * @param  ?string  $consumerKey
     * @param  ?string  $consumerSecret
     * @param  ?string  $devApiKey
     * @param  ?array<string>  $emails
     * @param  ?float  $expiresIn
     * @param  ?\DateTime  $expiryDate
     * @param  ?string  $key
     * @param  ?array<string, mixed>  $meta
     * @param  ?string  $name
     * @param  ?array<string>  $otherAuthInfo
     * @param  ?string  $pem
     * @param  ?string  $refreshToken
     * @param  ?\DateTime  $refreshTokenExpiresDate
     * @param  ?float  $refreshTokenExpiresIn
     * @param  ?string  $state
     * @param  ?string  $token
     * @param  ?string  $tokenUrl
     * @param  ?string  $userId
     * @phpstan-pure
     */
    public function __construct(?string $accessToken = null, ?string $apiUrl = null, ?string $appId = null, ?string $authorizeUrl = null, ?string $clientId = null, ?string $clientSecret = null, ?string $consumerKey = null, ?string $consumerSecret = null, ?string $devApiKey = null, ?array $emails = null, ?float $expiresIn = null, ?\DateTime $expiryDate = null, ?string $key = null, ?array $meta = null, ?string $name = null, ?array $otherAuthInfo = null, ?string $pem = null, ?string $refreshToken = null, ?\DateTime $refreshTokenExpiresDate = null, ?float $refreshTokenExpiresIn = null, ?string $state = null, ?string $token = null, ?string $tokenUrl = null, ?string $userId = null)
    {
        $this->accessToken = $accessToken;
        $this->apiUrl = $apiUrl;
        $this->appId = $appId;
        $this->authorizeUrl = $authorizeUrl;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->consumerKey = $consumerKey;
        $this->consumerSecret = $consumerSecret;
        $this->devApiKey = $devApiKey;
        $this->emails = $emails;
        $this->expiresIn = $expiresIn;
        $this->expiryDate = $expiryDate;
        $this->key = $key;
        $this->meta = $meta;
        $this->name = $name;
        $this->otherAuthInfo = $otherAuthInfo;
        $this->pem = $pem;
        $this->refreshToken = $refreshToken;
        $this->refreshTokenExpiresDate = $refreshTokenExpiresDate;
        $this->refreshTokenExpiresIn = $refreshTokenExpiresIn;
        $this->state = $state;
        $this->token = $token;
        $this->tokenUrl = $tokenUrl;
        $this->userId = $userId;
    }
}
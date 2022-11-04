<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 429 Too Many Requests
 * 
 * The user has sent too many requests in a given amount of time ("rate limiting").
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/429
 * 
 * @author Pavel Sterba 
 */
class TooManyRequestsException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 429;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 429;

    /**
     * @var string
     */
    protected $message = "429 Too Many Requests";
}

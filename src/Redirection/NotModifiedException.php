<?php

declare(strict_types=1);

namespace HttpException\Redirection;

use HttpException\RedirectionException;

/**
 * 304 Not Modified
 * 
 * This is used for caching purposes. It tells the client that the response has not been modified, so the client can continue to use the same cached version of the response.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/304
 * 
 * @author Pavel Sterba 
 */
class NotModifiedException extends RedirectionException
{
    /**
     * @var int
     */
    protected $code = 304;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 304;

    /**
     * @var string
     */
    protected $message = "304 Not Modified";
}

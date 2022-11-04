<?php

declare(strict_types=1);

namespace HttpException\ServerError;

use HttpException\ServerErrorException;

/**
 * 505 HTTP Version Not Supported
 * 
 * The HTTP version used in the request is not supported by the server.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/505
 * 
 * @author Pavel Sterba 
 */
class HTTPVersionNotSupportedException extends ServerErrorException
{
    /**
     * @var int
     */
    protected $code = 505;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 505;

    /**
     * @var string
     */
    protected $message = "505 HTTP Version Not Supported";
}

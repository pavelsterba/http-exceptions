<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 431 Request Header Fields Too Large
 * 
 * The server is unwilling to process the request because its header fields are too large. The request may be resubmitted after reducing the size of the request header fields.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/431
 * 
 * @author Pavel Sterba 
 */
class RequestHeaderFieldsTooLargeException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 431;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 431;

    /**
     * @var string
     */
    protected $message = "431 Request Header Fields Too Large";
}

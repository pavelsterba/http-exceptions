<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 415 Unsupported Media Type
 * 
 * The media format of the requested data is not supported by the server, so the server is rejecting the request.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/415
 * 
 * @author Pavel Sterba 
 */
class UnsupportedMediaTypeException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 415;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 415;

    /**
     * @var string
     */
    protected $message = "415 Unsupported Media Type";
}

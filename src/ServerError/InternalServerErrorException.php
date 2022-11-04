<?php

declare(strict_types=1);

namespace HttpException\ServerError;

use HttpException\ServerErrorException;

/**
 * 500 Internal Server Error
 * 
 * The server has encountered a situation it does not know how to handle.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/500
 * 
 * @author Pavel Sterba 
 */
class InternalServerErrorException extends ServerErrorException
{
    /**
     * @var int
     */
    protected $code = 500;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 500;

    /**
     * @var string
     */
    protected $message = "500 Internal Server Error";
}

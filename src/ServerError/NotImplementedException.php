<?php

declare(strict_types=1);

namespace HttpException\ServerError;

use HttpException\ServerErrorException;

/**
 * 501 Not Implemented
 * 
 * The request method is not supported by the server and cannot be handled. The only methods that servers are required to support (and therefore that must not return this code) are GET and HEAD.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/501
 * 
 * @author Pavel Sterba 
 */
class NotImplementedException extends ServerErrorException
{
    /**
     * @var int
     */
    protected $code = 501;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 501;

    /**
     * @var string
     */
    protected $message = "501 Not Implemented";
}

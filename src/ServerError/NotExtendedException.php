<?php

declare(strict_types=1);

namespace HttpException\ServerError;

use HttpException\ServerErrorException;

/**
 * 510 Not Extended
 * 
 * Further extensions to the request are required for the server to fulfill it.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/510
 * 
 * @author Pavel Sterba 
 */
class NotExtendedException extends ServerErrorException
{
    /**
     * @var int
     */
    protected $code = 510;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 510;

    /**
     * @var string
     */
    protected $message = "510 Not Extended";
}

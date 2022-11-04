<?php

declare(strict_types=1);

namespace HttpException\ServerError;

use HttpException\ServerErrorException;

/**
 * 508 Loop Detected
 * 
 * The server detected an infinite loop while processing the request.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/508
 * 
 * @author Pavel Sterba 
 */
class LoopDetectedException extends ServerErrorException
{
    /**
     * @var int
     */
    protected $code = 508;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 508;

    /**
     * @var string
     */
    protected $message = "508 Loop Detected";
}

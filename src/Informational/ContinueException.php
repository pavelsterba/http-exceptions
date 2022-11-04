<?php

declare(strict_types=1);

namespace HttpException\Informational;

use HttpException\InformationalException;

/**
 * 100 Continue
 * 
 * This interim response indicates that the client should continue the request or ignore the response if the request is already finished.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/100
 * 
 * @author Pavel Sterba 
 */
class ContinueException extends InformationalException
{
    /**
     * @var int
     */
    protected $code = 100;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 100;

    /**
     * @var string
     */
    protected $message = "100 Continue";
}

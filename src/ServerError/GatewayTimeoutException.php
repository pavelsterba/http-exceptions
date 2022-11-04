<?php

declare(strict_types=1);

namespace HttpException\ServerError;

use HttpException\ServerErrorException;

/**
 * 504 Gateway Timeout
 * 
 * This error response is given when the server is acting as a gateway and cannot get a response in time.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/504
 * 
 * @author Pavel Sterba 
 */
class GatewayTimeoutException extends ServerErrorException
{
    /**
     * @var int
     */
    protected $code = 504;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 504;

    /**
     * @var string
     */
    protected $message = "504 Gateway Timeout";
}

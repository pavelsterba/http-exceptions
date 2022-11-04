<?php

declare(strict_types=1);

namespace HttpException\ServerError;

use HttpException\ServerErrorException;

/**
 * 511 Network Authentication Required
 * 
 * Indicates that the client needs to authenticate to gain network access.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/511
 * 
 * @author Pavel Sterba 
 */
class NetworkAuthenticationRequiredException extends ServerErrorException
{
    /**
     * @var int
     */
    protected $code = 511;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 511;

    /**
     * @var string
     */
    protected $message = "511 Network Authentication Required";
}

<?php

declare(strict_types=1);

namespace HttpException\ServerError;

use HttpException\ServerErrorException;

/**
 * 502 Bad Gateway
 * 
 * This error response means that the server, while working as a gateway to get a response needed to handle the request, got an invalid response.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/502
 * 
 * @author Pavel Sterba 
 */
class BadGatewayException extends ServerErrorException
{
    /**
     * @var int
     */
    protected $code = 502;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 502;

    /**
     * @var string
     */
    protected $message = "502 Bad Gateway";
}

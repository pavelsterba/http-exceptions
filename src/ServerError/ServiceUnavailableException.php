<?php

declare(strict_types=1);

namespace HttpException\ServerError;

use HttpException\ServerErrorException;

/**
 * 503 Service Unavailable
 * 
 * The server is not ready to handle the request. Common causes are a server that is down for maintenance or that is overloaded. Note that together with this response, a user-friendly page explaining the problem should be sent. This response should be used for temporary conditions and the Retry-After HTTP header should, if possible, contain the estimated time before the recovery of the service. The webmaster must also take care about the caching-related headers that are sent along with this response, as these temporary condition responses should usually not be cached.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/503
 * 
 * @author Pavel Sterba 
 */
class ServiceUnavailableException extends ServerErrorException
{
    /**
     * @var int
     */
    protected $code = 503;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 503;

    /**
     * @var string
     */
    protected $message = "503 Service Unavailable";
}

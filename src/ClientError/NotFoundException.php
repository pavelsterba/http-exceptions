<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 404 Not Found
 * 
 * The server cannot find the requested resource. In the browser, this means the URL is not recognized. In an API, this can also mean that the endpoint is valid but the resource itself does not exist. Servers may also send this response instead of 403 Forbidden to hide the existence of a resource from an unauthorized client. This response code is probably the most well known due to its frequent occurrence on the web.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/404
 * 
 * @author Pavel Sterba 
 */
class NotFoundException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 404;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 404;

    /**
     * @var string
     */
    protected $message = "404 Not Found";
}

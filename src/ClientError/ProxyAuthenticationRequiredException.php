<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 407 Proxy Authentication Required
 * 
 * This is similar to 401 Unauthorized but authentication is needed to be done by a proxy.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/407
 * 
 * @author Pavel Sterba 
 */
class ProxyAuthenticationRequiredException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 407;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 407;

    /**
     * @var string
     */
    protected $message = "407 Proxy Authentication Required";
}

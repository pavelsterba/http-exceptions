<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 401 Unauthorized
 * 
 * Although the HTTP standard specifies "unauthorized", semantically this response means "unauthenticated". That is, the client must authenticate itself to get the requested response.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/401
 * 
 * @author Pavel Sterba 
 */
class UnauthorizedException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 401;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 401;

    /**
     * @var string
     */
    protected $message = "401 Unauthorized";
}

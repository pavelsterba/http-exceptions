<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 405 Method Not Allowed
 * 
 * The request method is known by the server but is not supported by the target resource. For example, an API may not allow calling DELETE to remove a resource.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/405
 * 
 * @author Pavel Sterba 
 */
class MethodNotAllowedException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 405;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 405;

    /**
     * @var string
     */
    protected $message = "405 Method Not Allowed";
}

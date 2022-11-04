<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 403 Forbidden
 * 
 * The client does not have access rights to the content; that is, it is unauthorized, so the server is refusing to give the requested resource. Unlike 401 Unauthorized, the client's identity is known to the server.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/403
 * 
 * @author Pavel Sterba 
 */
class ForbiddenException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 403;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 403;

    /**
     * @var string
     */
    protected $message = "403 Forbidden";
}

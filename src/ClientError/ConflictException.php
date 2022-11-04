<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 409 Conflict
 * 
 * This response is sent when a request conflicts with the current state of the server.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/409
 * 
 * @author Pavel Sterba 
 */
class ConflictException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 409;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 409;

    /**
     * @var string
     */
    protected $message = "409 Conflict";
}

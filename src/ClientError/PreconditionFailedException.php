<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 412 Precondition Failed
 * 
 * The client has indicated preconditions in its headers which the server does not meet.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/412
 * 
 * @author Pavel Sterba 
 */
class PreconditionFailedException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 412;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 412;

    /**
     * @var string
     */
    protected $message = "412 Precondition Failed";
}

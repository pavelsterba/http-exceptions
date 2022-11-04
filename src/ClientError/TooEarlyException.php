<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 425 Too Early
 * 
 * Indicates that the server is unwilling to risk processing a request that might be replayed.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/425
 * 
 * @author Pavel Sterba 
 */
class TooEarlyException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 425;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 425;

    /**
     * @var string
     */
    protected $message = "425 Too Early";
}

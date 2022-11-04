<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 413 Payload Too Large
 * 
 * Request entity is larger than limits defined by server. The server might close the connection or return an Retry-After header field.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/413
 * 
 * @author Pavel Sterba 
 */
class PayloadTooLargeException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 413;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 413;

    /**
     * @var string
     */
    protected $message = "413 Payload Too Large";
}

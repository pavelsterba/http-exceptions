<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 411 Length Required
 * 
 * Server rejected the request because the Content-Length header field is not defined and the server requires it.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/411
 * 
 * @author Pavel Sterba 
 */
class LengthRequiredException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 411;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 411;

    /**
     * @var string
     */
    protected $message = "411 Length Required";
}

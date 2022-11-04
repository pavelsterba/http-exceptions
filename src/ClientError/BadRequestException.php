<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 400 Bad Request
 * 
 * The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing).
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/400
 * 
 * @author Pavel Sterba 
 */
class BadRequestException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 400;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 400;

    /**
     * @var string
     */
    protected $message = "400 Bad Request";
}

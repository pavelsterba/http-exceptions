<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 414 URI Too Long
 * 
 * The URI requested by the client is longer than the server is willing to interpret.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/414
 * 
 * @author Pavel Sterba 
 */
class URITooLongException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 414;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 414;

    /**
     * @var string
     */
    protected $message = "414 URI Too Long";
}

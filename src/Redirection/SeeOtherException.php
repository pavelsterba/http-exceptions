<?php

declare(strict_types=1);

namespace HttpException\Redirection;

use HttpException\RedirectionException;

/**
 * 303 See Other
 * 
 * The server sent this response to direct the client to get the requested resource at another URI with a GET request.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/303
 * 
 * @author Pavel Sterba 
 */
class SeeOtherException extends RedirectionException
{
    /**
     * @var int
     */
    protected $code = 303;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 303;

    /**
     * @var string
     */
    protected $message = "303 See Other";
}

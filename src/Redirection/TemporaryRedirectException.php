<?php

declare(strict_types=1);

namespace HttpException\Redirection;

use HttpException\RedirectionException;

/**
 * 307 Temporary Redirect
 * 
 * The server sends this response to direct the client to get the requested resource at another URI with same method that was used in the prior request. This has the same semantics as the 302 Found HTTP response code, with the exception that the user agent must not change the HTTP method used: if a POST was used in the first request, a POST must be used in the second request.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/307
 * 
 * @author Pavel Sterba 
 */
class TemporaryRedirectException extends RedirectionException
{
    /**
     * @var int
     */
    protected $code = 307;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 307;

    /**
     * @var string
     */
    protected $message = "307 Temporary Redirect";
}

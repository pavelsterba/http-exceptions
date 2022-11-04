<?php

declare(strict_types=1);

namespace HttpException\Redirection;

use HttpException\RedirectionException;

/**
 * 301 Moved Permanently
 * 
 * The request has more than one possible response. The user agent or user should choose one of them. (There is no standardized way of choosing one of the responses, but HTML links to the possibilities are recommended so the user can pick.)
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/301
 * 
 * @author Pavel Sterba 
 */
class MovedPermanentlyException extends RedirectionException
{
    /**
     * @var int
     */
    protected $code = 301;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 301;

    /**
     * @var string
     */
    protected $message = "301 Moved Permanently";
}

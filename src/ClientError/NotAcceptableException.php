<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 406 Not Acceptable
 * 
 * This response is sent when the web server, after performing server-driven content negotiation, doesn't find any content that conforms to the criteria given by the user agent.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/406
 * 
 * @author Pavel Sterba 
 */
class NotAcceptableException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 406;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 406;

    /**
     * @var string
     */
    protected $message = "406 Not Acceptable";
}

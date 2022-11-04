<?php

declare(strict_types=1);

namespace HttpException\Successful;

use HttpException\SuccessfulException;

/**
 * 204 No Content
 * 
 * There is no content to send for this request, but the headers may be useful. The user agent may update its cached headers for this resource with the new ones.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/204
 * 
 * @author Pavel Sterba 
 */
class NoContentException extends SuccessfulException
{
    /**
     * @var int
     */
    protected $code = 204;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 204;

    /**
     * @var string
     */
    protected $message = "204 No Content";
}

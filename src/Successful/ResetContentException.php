<?php

declare(strict_types=1);

namespace HttpException\Successful;

use HttpException\SuccessfulException;

/**
 * 205 Reset Content
 * 
 * Tells the user agent to reset the document which sent this request.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/205
 * 
 * @author Pavel Sterba 
 */
class ResetContentException extends SuccessfulException
{
    /**
     * @var int
     */
    protected $code = 205;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 205;

    /**
     * @var string
     */
    protected $message = "205 Reset Content";
}

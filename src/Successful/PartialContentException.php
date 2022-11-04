<?php

declare(strict_types=1);

namespace HttpException\Successful;

use HttpException\SuccessfulException;

/**
 * 206 Partial Content
 * 
 * This response code is used when the Range header is sent from the client to request only part of a resource.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/206
 * 
 * @author Pavel Sterba 
 */
class PartialContentException extends SuccessfulException
{
    /**
     * @var int
     */
    protected $code = 206;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 206;

    /**
     * @var string
     */
    protected $message = "206 Partial Content";
}

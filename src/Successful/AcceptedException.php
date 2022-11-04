<?php

declare(strict_types=1);

namespace HttpException\Successful;

use HttpException\SuccessfulException;

/**
 * 202 Accepted
 * 
 * The request has been received but not yet acted upon. It is noncommittal, since there is no way in HTTP to later send an asynchronous response indicating the outcome of the request. It is intended for cases where another process or server handles the request, or for batch processing.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/202
 * 
 * @author Pavel Sterba 
 */
class AcceptedException extends SuccessfulException
{
    /**
     * @var int
     */
    protected $code = 202;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 202;

    /**
     * @var string
     */
    protected $message = "202 Accepted";
}

<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 416 Range Not Satisfiable
 * 
 * The range specified by the Range header field in the request cannot be fulfilled. It's possible that the range is outside the size of the target URI's data.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/416
 * 
 * @author Pavel Sterba 
 */
class RangeNotSatisfiableException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 416;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 416;

    /**
     * @var string
     */
    protected $message = "416 Range Not Satisfiable";
}

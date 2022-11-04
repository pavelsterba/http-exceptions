<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 417 Expectation Failed
 * 
 * This response code means the expectation indicated by the Expect request header field cannot be met by the server.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/417
 * 
 * @author Pavel Sterba 
 */
class ExpectationFailedException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 417;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 417;

    /**
     * @var string
     */
    protected $message = "417 Expectation Failed";
}

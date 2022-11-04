<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 402 Payment Required
 * 
 * This response code is reserved for future use. The initial aim for creating this code was using it for digital payment systems, however this status code is used very rarely and no standard convention exists.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/402
 * 
 * @author Pavel Sterba 
 */
class PaymentRequiredException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 402;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 402;

    /**
     * @var string
     */
    protected $message = "402 Payment Required";
}

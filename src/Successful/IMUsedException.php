<?php

declare(strict_types=1);

namespace HttpException\Successful;

use HttpException\SuccessfulException;

/**
 * 226 IM Used
 * 
 * The server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.
 * 
 * @author Pavel Sterba 
 */
class IMUsedException extends SuccessfulException
{
    /**
     * @var int
     */
    protected $code = 226;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 226;

    /**
     * @var string
     */
    protected $message = "226 IM Used";
}

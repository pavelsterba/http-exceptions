<?php

declare(strict_types=1);

namespace HttpException;

/**
 * Parent class for 4xx Client Error Exceptions.
 * 
 * @author Pavel Sterba
 */
abstract class ClientErrorException extends HttpException
{
    /**
     * @var int
     */
    protected $code = 40;

    /**
     * @var string
     */
    protected $message = "Client Error Exception";
}

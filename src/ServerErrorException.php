<?php

declare(strict_types=1);

namespace HttpException;

/**
 * Parent class for 5xx Server Error Exceptions.
 * 
 * @author Pavel Sterba
 */
abstract class ServerErrorException extends HttpException
{
    /**
     * @var int
     */
    protected $code = 50;

    /**
     * @var string
     */
    protected $message = "Server Error Exception";
}

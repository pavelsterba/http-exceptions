<?php

declare(strict_types=1);

namespace HttpException;

/**
 * Parent class for 3xx Redirection Exceptions.
 * 
 * @author Pavel Sterba
 */
abstract class RedirectionException extends HttpException
{
    /**
     * @var int
     */
    protected $code = 30;

    /**
     * @var string
     */
    protected $message = "Redirection Exception";
}

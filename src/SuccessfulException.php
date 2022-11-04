<?php

declare(strict_types=1);

namespace HttpException;

/**
 * Parent class for 2xx Successful Exceptions.
 * 
 * @author Pavel Sterba
 */
abstract class SuccessfulException extends HttpException
{
    /**
     * @var int
     */
    protected $code = 20;

    /**
     * @var string
     */
    protected $message = "Successful Exception";
}

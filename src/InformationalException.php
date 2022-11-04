<?php

declare(strict_types=1);

namespace HttpException;

/**
 * Parent class for 1xx Informational Exceptions.
 * 
 * @author Pavel Sterba
 */
abstract class InformationalException extends HttpException
{
    /**
     * @var int
     */
    protected $code = 10;

    /**
     * @var string
     */
    protected $message = "Informational Exception";
}

<?php

declare(strict_types=1);

namespace HttpException;

/**
 * HTTP Exceptions base class.
 * 
 * @author Pavel Sterba
 */
abstract class HttpException extends \Exception
{
	/**
	 * @var int
	 */

	protected $code = 1;

	/**
	 * @var string
	 */
	protected $message = 'HTTP Exception';

	/**
	 * Create instance of required exception with custom message and previous exception.
	 * 
	 * @param string $message Message passed to exception.
	 * @param \Throwable $previous Previous exception.
	 * @return HttpException Instance of HttpException.
	 */
	public static function get(string $message = "", \Throwable $previous = null)
	{
		$className = static::class;
		return new $className($message, $className::$statusCode, $previous);
	}
}

<?php
namespace HttpException;

/**
 * Parent class for 5xx server error exceptions.
 *
 * @author Pavel Sterba
 */
abstract class ServerErrorException extends Exception
{
	/**
	 * @var string
	 */
	protected $message = 'Server Error 5xx';

	/**
	 * @var int
	 */
	protected $code = 5;
}

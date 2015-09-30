<?php
namespace HttpException;

/**
 * Parent class for 4xx client error exceptions.
 *
 * @author Pavel Sterba
 */
abstract class ClientErrorException extends Exception
{
	/**
	 * @var string
	 */
	protected $message = 'Client Error 4xx';

	/**
	 * @var int
	 */
	protected $code = 4;
}

<?php
namespace HttpException;

/**
 * HTTP exception parent.
 *
 * @author Pavel Sterba
 */
abstract class Exception extends \Exception
{
	/**
	 * @var string
	 */
	protected $message = 'HTTP Exception';
}

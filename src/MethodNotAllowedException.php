<?php
namespace HttpException;

/**
 * 405 Method Not Allowed
 *
 * The method specified in the Request-Line is not allowed for the
 * resource identified by the Request-URI. The response MUST include an
 * Allow header containing a list of valid methods for the requested
 * resource.
 *
 * @author Pavel Sterba
 */
class MethodNotAllowedException extends ClientErrorException
{
	/**
	 * @var string
	 */
	protected $message = '405 Method Not Allowed';

	/**
	 * @var int
	 */
	protected $code = 405;
}

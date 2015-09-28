<?php
namespace HttpException;

/**
 * 501 Not Implemented
 *
 * The server does not support the functionality required to fulfill the
 * request. This is the appropriate response when the server does not
 * recognize the request method and is not capable of supporting it for
 * any resource.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.5.2
 * @author Pavel Sterba
 */
class NotImplementedException extends ServerErrorException
{
	/**
	 * @var string
	 */
	protected $message = '501 Not Implemented';

	/**
	 * @var int
	 */
	protected $code = 501;
}

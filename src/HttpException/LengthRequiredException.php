<?php
namespace HttpException;

/**
 * 411 Length Required
 *
 * The server refuses to accept the request without a defined Content-
 * Length. The client MAY repeat the request if it adds a valid
 * Content-Length header field containing the length of the message-body
 * in the request message.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.4.12
 * @author Pavel Sterba
 */
class LengthRequiredException extends ClientErrorException
{
	/**
	 * @var string
	 */
	protected $message = '411 Length Required';

	/**
	 * @var int
	 */
	protected $code = 411;
}

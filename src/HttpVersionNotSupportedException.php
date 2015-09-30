<?php
namespace HttpException;

/**
 * 505 HTTP Version Not Supported
 *
 * The server does not support, or refuses to support, the HTTP protocol
 * version that was used in the request message. The server is
 * indicating that it is unable or unwilling to complete the request
 * using the same major version as the client, as described in section
 * 3.1, other than with this error message. The response SHOULD contain
 * an entity describing why that version is not supported and what other
 * protocols are supported by that server.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.5.6
 * @author Pavel Sterba
 */
class HttpVersionNotSupportedException extends ServerErrorException
{
	/**
	 * @var string
	 */
	protected $message = '505 HTTP Version Not Supported';

	/**
	 * @var int
	 */
	protected $code = 505;
}

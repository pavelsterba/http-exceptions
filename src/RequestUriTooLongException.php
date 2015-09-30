<?php
namespace HttpException;

/**
 * 414 Request-URI Too Long
 *
 * The server is refusing to service the request because the Request-URI
 * is longer than the server is willing to interpret. This rare
 * condition is only likely to occur when a client has improperly
 * converted a POST request to a GET request with long query
 * information, when the client has descended into a URI "black hole" of
 * redirection (e.g., a redirected URI prefix that points to a suffix of
 * itself), or when the server is under attack by a client attempting to
 * exploit security holes present in some servers using fixed-length
 * buffers for reading or manipulating the Request-URI.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.4.15
 * @author Pavel Sterba
 */
class RequestUriTooLongException extends ClientErrorException
{
	/**
	 * @var string
	 */
	protected $message = '414 Request-URI Too Long';

	/**
	 * @var int
	 */
	protected $code = 414;
}

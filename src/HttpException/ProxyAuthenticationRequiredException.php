<?php
namespace HttpException;

/**
 * 407 Proxy Authentication Required
 *
 * This code is similar to 401 (Unauthorized), but indicates that the
 * client must first authenticate itself with the proxy. The proxy MUST
 * return a Proxy-Authenticate header field (section 14.33) containing a
 * challenge applicable to the proxy for the requested resource. The
 * client MAY repeat the request with a suitable Proxy-Authorization
 * header field (section 14.34). HTTP access authentication is explained
 * in "HTTP Authentication: Basic and Digest Access Authentication".
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.4.8
 * @author Pavel Sterba
 */
class ProxyAuthenticationRequiredException extends ClientErrorException
{
	/**
	 * @var string
	 */
	protected $message = '407 Proxy Authentication Required';

	/**
	 * @var int
	 */
	protected $code = 407;
}

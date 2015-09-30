<?php
namespace HttpException;

/**
 * 504 Gateway Timeout
 *
 * The server, while acting as a gateway or proxy, did not receive a
 * timely response from the upstream server specified by the URI (e.g.
 * HTTP, FTP, LDAP) or some other auxiliary server (e.g. DNS) it needed
 * to access in attempting to complete the request.

 *    Note: Note to implementors: some deployed proxies are known to
 *    return 400 or 500 when DNS lookups time out.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.5.5
 * @author Pavel Sterba
 */
class GatewayTimeoutException extends ServerErrorException
{
	/**
	 * @var string
	 */
	protected $message = '504 Gateway Timeout';

	/**
	 * @var int
	 */
	protected $code = 504;
}

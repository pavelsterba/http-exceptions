<?php
namespace HttpException;

/**
 * 404 Not Found
 *
 * The server has not found anything matching the Request-URI. No
 * indication is given of whether the condition is temporary or
 * permanent. The 410 (Gone) status code SHOULD be used if the server
 * knows, through some internally configurable mechanism, that an old
 * resource is permanently unavailable and has no forwarding address.
 * This status code is commonly used when the server does not wish to
 * reveal exactly why the request has been refused, or when no other
 * response is applicable.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.4.5
 * @author Pavel Sterba
 */
class NotFoundException extends ClientErrorException
{
	/**
	 * @var string
	 */
	protected $message = '404 Not Found';

	/**
	 * @var int
	 */
	protected $code = 404;
}

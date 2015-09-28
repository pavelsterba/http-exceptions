<?php
namespace HttpException;

/**
 * 403 Forbidden
 *
 * The server understood the request, but is refusing to fulfill it.
 * Authorization will not help and the request SHOULD NOT be repeated.
 * If the request method was not HEAD and the server wishes to make
 * public why the request has not been fulfilled, it SHOULD describe the
 * reason for the refusal in the entity.  If the server does not wish to
 * make this information available to the client, the status code 404
 * (Not Found) can be used instead.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.4.4
 * @author Pavel Sterba
 */
class ForbiddenException extends ClientErrorException
{
	/**
	 * @var string
	 */
	protected $message = '403 Forbidden';

	/**
	 * @var int
	 */
	protected $code = 403;
}

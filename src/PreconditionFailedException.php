<?php
namespace HttpException;

/**
 * 412 Precondition Failed
 *
 * The precondition given in one or more of the request-header fields
 * evaluated to false when it was tested on the server. This response
 * code allows the client to place preconditions on the current resource
 * metainformation (header field data) and thus prevent the requested
 * method from being applied to a resource other than the one intended.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.4.13
 * @author Pavel Sterba
 */
class PreconditionFailedException extends ClientErrorException
{
	/**
	 * @var string
	 */
	protected $message = '412 Precondition Failed';

	/**
	 * @var int
	 */
	protected $code = 412;
}

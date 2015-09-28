<?php
namespace HttpException;

/**
 * 417 Expectation Failed
 *
 * The expectation given in an Expect request-header field (see section
 * 14.20) could not be met by this server, or, if the server is a proxy,
 * the server has unambiguous evidence that the request could not be met
 * by the next-hop server.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.4.18
 * @author Pavel Sterba
 */
class ExpectationFailedException extends ClientErrorException
{
	/**
	 * @var string
	 */
	protected $message = '417 Expectation Failed';

	/**
	 * @var int
	 */
	protected $code = 417;
}

<?php
namespace HttpException\tests;

use HttpException\Exception as HttpException;
use HttpException\ThrowHttpException;

/**
 * Tests for Throw HTTP Exception service.
 *
 * @author Pavel Sterba
 */
class ThrowHttpExceptionTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var string
	 */
	const EXCEPITON_CLASS_NAME_PATTERN = '\HttpException\%sException';

	/**
	 * @test
	 * @dataProvider exceptionByCodeProvider
	 */
	public function throwExceptionByCode($code, $expectedInstance, $expectedMessage)
	{
		try {
			ThrowHttpException::byCode($code);
			$this->fail('Exception was not thrown.');
		} catch (HttpException $e) {
			$expectedInstanceOf = sprintf(self::EXCEPITON_CLASS_NAME_PATTERN, $expectedInstance);

			$this->assertInstanceOf($expectedInstanceOf, $e);
			$this->assertEquals($e->getMessage(), $expectedMessage);
			$this->assertEquals($e->getCode(), $code);
		}
	}

	/**
	 * Provider of exception by code.
	 */
	public static function exceptionByCodeProvider()
	{
		return [
			[400, 'BadRequest', '400 Bad Request'],
			[401, 'Unauthorized', '401 Unauthorized'],
			[402, 'PaymentRequired', '402 Payment Required'],
			[403, 'Forbidden', '403 Forbidden'],
			[404, 'NotFound', '404 Not Found'],
			[405, 'MethodNotAllowed', '405 Method Not Allowed'],
			[406, 'NotAcceptable', '406 Not Acceptable'],
			[407, 'ProxyAuthenticationRequired', '407 Proxy Authentication Required'],
			[408, 'RequestTimeout', '408 Request Timeout'],
			[409, 'Conflict', '409 Conflict'],
			[410, 'Gone', '410 Gone'],
			[411, 'LengthRequired', '411 Length Required'],
			[412, 'PreconditionFailed', '412 Precondition Failed'],
			[413, 'RequestEntityTooLarge', '413 Request Entity Too Large'],
			[414, 'RequestUriTooLong', '414 Request-URI Too Long'],
			[415, 'UnsupportedMediaType', '415 Unsupported Media Type'],
			[416, 'RequestedRangeNotSatisfiable', '416 Requested Range Not Satisfiable'],
			[417, 'ExpectationFailed', '417 Expectation Failed'],
			[500, 'InternalServerError', '500 Internal Server Error'],
			[501, 'NotImplemented', '501 Not Implemented'],
			[502, 'BadGateway', '502 Bad Gateway'],
			[503, 'ServiceUnavailable', '503 Service Unavailable'],
			[504, 'GatewayTimeout', '504 Gateway Timeout'],
			[505, 'HttpVersionNotSupported', '505 HTTP Version Not Supported']
		];
	}

	/**
	 * @test
	 * @dataProvider exceptionWithMessageProvider
	 */
	public function throwExceptionWithMessage($code, $message, $expectedInstance)
	{
		try {
			ThrowHttpException::withMessage($code, $message);
			$this->fail('Exception was not thrown.');
		} catch (HttpException $e) {
			$expectedInstanceOf = sprintf(self::EXCEPITON_CLASS_NAME_PATTERN, $expectedInstance);

			$this->assertInstanceOf($expectedInstanceOf, $e);
			$this->assertEquals($e->getMessage(), $message);
			$this->assertEquals($e->getCode(), $code);
		}
	}

	/**
	 * Provider of exception with custom message.
	 */
	public static function exceptionWithMessageProvider()
	{
		return [
			[400, 'Custome message for BadRequest exception', 'BadRequest'],
			[401, 'Custome message for Unauthorized exception', 'Unauthorized'],
			[402, 'Custome message for PaymentRequired exception', 'PaymentRequired'],
			[403, 'Custome message for Forbidden exception', 'Forbidden'],
			[404, 'Custome message for NotFound exception', 'NotFound'],
			[405, 'Custome message for MethodNotAllowed exception', 'MethodNotAllowed'],
			[406, 'Custome message for NotAcceptable exception', 'NotAcceptable'],
			[407, 'Custome message for ProxyAuthenticationRequired exception', 'ProxyAuthenticationRequired'],
			[408, 'Custome message for RequestTimeout exception', 'RequestTimeout'],
			[409, 'Custome message for Conflict exception', 'Conflict'],
			[410, 'Custome message for Gone exception', 'Gone'],
			[411, 'Custome message for LengthRequired exception', 'LengthRequired'],
			[412, 'Custome message for PreconditionFailed exception', 'PreconditionFailed'],
			[413, 'Custome message for RequestEntityTooLarge exception', 'RequestEntityTooLarge'],
			[414, 'Custome message for RequestUriTooLong exception', 'RequestUriTooLong'],
			[415, 'Custome message for UnsupportedMediaType exception', 'UnsupportedMediaType'],
			[416, 'Custome message for RequestedRangeNotSatisfiable exception', 'RequestedRangeNotSatisfiable'],
			[417, 'Custome message for ExpectationFailed exception', 'ExpectationFailed'],
			[500, 'Custome message for InternalServerError exception', 'InternalServerError'],
			[501, 'Custome message for NotImplemented exception', 'NotImplemented'],
			[502, 'Custome message for BadGateway exception', 'BadGateway'],
			[503, 'Custome message for ServiceUnavailable exception', 'ServiceUnavailable'],
			[504, 'Custome message for GatewayTimeout exception', 'GatewayTimeout'],
			[505, 'Custome message for HttpVersionNotSupported exception', 'HttpVersionNotSupported']
		];
	}

	/**
	 * @test
	 * @dataProvider unsupportedCodeProvider
	 */
	public function tryToThrowExceptionForUnsupportedCode($code, $message)
	{
		$actualByCodeReturnValue = ThrowHttpException::byCode($code);
		$actualWithMessageReturnValue = ThrowHttpException::withMessage($code, $message);

		$this->assertEmpty($actualByCodeReturnValue);
		$this->assertEmpty($actualWithMessageReturnValue);
	}

	/**
	 * Provider of unsupported codes.
	 */
	public static function unsupportedCodeProvider()
	{
		return [
			[0, '0 is unsupported code.'],
			[200, '200 is unsupported code.'],
			['OK', 'OK is unsupported code.'],
			[true, 'True is unsupported code.'],
			[false, 'False is unsupported code.'],
			[new \stdClass(), 'stdClass is unsupported code.']
		];
	}
}

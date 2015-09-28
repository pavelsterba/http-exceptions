<?php
namespace HttpException\tests;

/**
 * Tests for 4xx client error exceptions.
 *
 * @author Pavel Sterba
 */
class ClientErrorExceptionsTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var string
	 */
	const EXCEPITON_CLASS_NAME_PATTERN = '\HttpException\%sException';

	/**
	 * Initialize exception instance.
	 *
	 * @param string $exceptionName
	 * @return \Exception
	 */
	private function initializeException($exceptionName)
	{
		$exceptionClassName = sprintf(self::EXCEPITON_CLASS_NAME_PATTERN, $exceptionName);

		return new $exceptionClassName();
	}

	/**
	 * @test
	 * @dataProvider clientErrorExceptionProvider
	 */
	public function checkExceptionInstanceOf($exceptionName, $expectedCode, $expectedMessage)
	{
		$e = $this->initializeException($exceptionName);

		$this->assertInstanceOf('\Exception', $e);
		$this->assertInstanceOf('\HttpException\Exception', $e);
		$this->assertInstanceOf('\HttpException\ClientErrorException', $e);

		$this->assertNotInstanceOf('\HttpException\ServerErrorException', $e);
	}

	/**
	 * @test
	 * @dataProvider clientErrorExceptionProvider
	 */
	public function checkExceptionMessageAndCode($exceptionName, $expectedCode, $expectedMessage)
	{
		$e = $this->initializeException($exceptionName);

		$this->assertEquals($expectedMessage, $e->getMessage());
		$this->assertEquals($expectedCode, $e->getCode());
	}

	/**
	 * Provider of client error exceptions.
	 */
	public static function clientErrorExceptionProvider()
	{
		return [
			['BadRequest', 400, '400 Bad Request'],
			['Unauthorized', 401, '401 Unauthorized'],
			['PaymentRequired', 402, '402 Payment Required'],
			['Forbidden', 403, '403 Forbidden'],
			['NotFound', 404, '404 Not Found'],
			['MethodNotAllowed', 405, '405 Method Not Allowed'],
			['NotAcceptable', 406, '406 Not Acceptable'],
			['ProxyAuthenticationRequired', 407, '407 Proxy Authentication Required'],
			['RequestTimeout', 408, '408 Request Timeout'],
			['Conflict', 409, '409 Conflict'],
			['Gone', 410, '410 Gone'],
			['LengthRequired', 411, '411 Length Required'],
			['PreconditionFailed', 412, '412 Precondition Failed'],
			['RequestEntityTooLarge', 413, '413 Request Entity Too Large'],
			['RequestUriTooLong', 414, '414 Request-URI Too Long'],
			['UnsupportedMediaType', 415, '415 Unsupported Media Type'],
			['RequestedRangeNotSatisfiable', 416, '416 Requested Range Not Satisfiable'],
			['ExpectationFailed', 417, '417 Expectation Failed']
		];
	}
}

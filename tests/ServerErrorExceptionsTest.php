<?php
namespace HttpException\tests;

/**
 * Tests for 5xx server error exceptions.
 *
 * @author Pavel Sterba
 */
class ServerErrorExceptionsTest extends \PHPUnit_Framework_TestCase
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
		$this->assertInstanceOf('\HttpException\ServerErrorException', $e);

		$this->assertNotInstanceOf('\HttpException\ClientErrorException', $e);
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
			['InternalServerError', 500, '500 Internal Server Error'],
			['NotImplemented', 501, '501 Not Implemented'],
			['BadGateway', 502, '502 Bad Gateway'],
			['ServiceUnavailable', 503, '503 Service Unavailable'],
			['GatewayTimeout', 504, '504 Gateway Timeout'],
			['HttpVersionNotSupported', 505, '505 HTTP Version Not Supported']
		];
	}
}

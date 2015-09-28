<?php
namespace HttpException\tests;

/**
 * Tests for 5xx server error exceptions.
 *
 * @author Pavel Sterba
 */
class GeneralHttpExceptionsTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var string
	 */
	const EXCEPITON_CLASS_NAME_PATTERN = '\HttpException\%s';

	/**
	 * Reflect exception instance.
	 *
	 * @param string $exceptionName
	 * @return \ReflectionClass
	 */
	private function reflectException($exceptionName)
	{
		$exceptionClassName = sprintf(self::EXCEPITON_CLASS_NAME_PATTERN, $exceptionName);

		return new \ReflectionClass($exceptionClassName);
	}

	/**
	 * Initialize exception class.
	 *
	 * @param string $exceptionName
	 * @return \Exception
	 */
	private function initializeException($exceptionName)
	{
		$exceptionClassName = sprintf(self::EXCEPITON_CLASS_NAME_PATTERN, $exceptionName);

		return $this->getMockForAbstractClass($exceptionClassName);
	}

	/**
	 * @test
	 * @dataProvider clientErrorExceptionProvider
	 */
	public function checkIfExceptionIsAbstract($exceptionName, $expectedCode, $expectedMessage)
	{
		$e = $this->reflectException($exceptionName);

		$this->assertTrue($e->isAbstract());
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
			['Exception', 0, 'HTTP Exception'],
			['ClientErrorException', 4, 'Client Error 4xx'],
			['ServerErrorException', 5, 'Server Error 5xx']
		];
	}
}

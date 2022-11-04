<?php

declare(strict_types=1);

use HttpException\HttpException;
use PHPUnit\Framework\TestCase;

/**
 * Tests for 1xx Informational Exceptions.
 *
 * @author Pavel Sterba
 */
class InformationalExceptionsTest extends TestCase
{
    /**
     * @var string
     */
    const EXCEPTION_CLASS_NAME_PATTERN = '\HttpException\Informational\%s';

    /**
     * @var string
     */
    const CUSTOM_EXCEPTION_MESSAGE = "Custom exception message";

    /**
     * Initialize exception with given name.
     * 
     * @param string $exceptionName
     * @return \HttpException\HttpException
     */
    private function initializeException(string $exceptionName): \HttpException\HttpException
    {
        $exceptionClassName = sprintf(self::EXCEPTION_CLASS_NAME_PATTERN, $exceptionName);

        return new $exceptionClassName();
    }

    /**
     * @test
     * @dataProvider informationalExceptionsProvider
     */
    public function checkExceptionType(string $exceptionName)
    {
        $e = $this->initializeException($exceptionName);

        $this->assertInstanceOf('\Exception', $e);
        $this->assertInstanceOf('\HttpException\HttpException', $e);
        $this->assertInstanceOf('\HttpException\InformationalException', $e);
    }

    /**
     * @test
     * @dataProvider informationalExceptionsProvider
     */
    public function checkExceptionNotType(string $exceptionName)
    {
        $e = $this->initializeException($exceptionName);

        $this->assertNotInstanceOf('\HttpException\SuccessfulException', $e);
        $this->assertNotInstanceOf('\HttpException\RedirectionException', $e);
        $this->assertNotInstanceOf('\HttpException\ClientErrorException', $e);
        $this->assertNotInstanceOf('\HttpException\ServerErrorException', $e);
    }

    /**
     * @test
     * @dataProvider informationalExceptionsProvider
     */
    public function checkStaticInitialization(string $exceptionName, int $exceptionCode)
    {
        $exceptionClassName = sprintf(self::EXCEPTION_CLASS_NAME_PATTERN, $exceptionName);
        $previousException = new \Exception();

        try {
            throw $exceptionClassName::get(self::CUSTOM_EXCEPTION_MESSAGE, $previousException);
        } catch (HttpException $e) {
            $this->assertInstanceOf('\HttpException\InformationalException', $e);
            $this->assertEquals(self::CUSTOM_EXCEPTION_MESSAGE, $e->getMessage());
            $this->assertEquals($exceptionCode, $e->getCode());
            $this->assertEquals($previousException, $e->getPrevious());
        }
    }

    /**
     * Provider of Informational Exceptions.
     * 
     * @return array
     */
    public function informationalExceptionsProvider(): array
    {
        return [
            ["ContinueException", 100, "100 Continue"],
            ["SwitchingProtocolsException", 101, "101 Switching Protocols"],
            ["ProcessingException", 102, "102 Processing"],
            ["EarlyHintsException", 103, "103 Early Hints"],
        ];
    }
}

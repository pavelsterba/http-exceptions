<?php

declare(strict_types=1);

use HttpException\HttpException;
use PHPUnit\Framework\TestCase;

/**
 * Tests for 2xx Successful Exceptions.
 *
 * @author Pavel Sterba
 */
class SuccessfulExceptionsTest extends TestCase
{
    /**
     * @var string
     */
    const EXCEPTION_CLASS_NAME_PATTERN = '\HttpException\Successful\%s';

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
     * @dataProvider successfulExceptionsProvider
     */
    public function checkExceptionType(string $exceptionName)
    {
        $e = $this->initializeException($exceptionName);

        $this->assertInstanceOf('\Exception', $e);
        $this->assertInstanceOf('\HttpException\HttpException', $e);
        $this->assertInstanceOf('\HttpException\SuccessfulException', $e);
    }

    /**
     * @test
     * @dataProvider successfulExceptionsProvider
     */
    public function checkExceptionNotType(string $exceptionName)
    {
        $e = $this->initializeException($exceptionName);

        $this->assertNotInstanceOf('\HttpException\InformationalException', $e);
        $this->assertNotInstanceOf('\HttpException\RedirectionException', $e);
        $this->assertNotInstanceOf('\HttpException\ClientErrorException', $e);
        $this->assertNotInstanceOf('\HttpException\ServerErrorException', $e);
    }

    /**
     * @test
     * @dataProvider successfulExceptionsProvider
     */
    public function checkStaticInitialization(string $exceptionName, int $exceptionCode)
    {
        $exceptionClassName = sprintf(self::EXCEPTION_CLASS_NAME_PATTERN, $exceptionName);
        $previousException = new \Exception();

        try {
            throw $exceptionClassName::get(self::CUSTOM_EXCEPTION_MESSAGE, $previousException);
        } catch (HttpException $e) {
            $this->assertInstanceOf('\HttpException\SuccessfulException', $e);
            $this->assertEquals(self::CUSTOM_EXCEPTION_MESSAGE, $e->getMessage());
            $this->assertEquals($exceptionCode, $e->getCode());
            $this->assertEquals($previousException, $e->getPrevious());
        }
    }

    /**
     * Provider of Successful Exceptions.
     * 
     * @return array
     */
    public function successfulExceptionsProvider(): array
    {
        return [
            ["OKException", 200, "200 OK"],
            ["CreatedException", 201, "201 Created"],
            ["AcceptedException", 202, "202 Accepted"],
            ["NonAuthoritativeInformationException", 203, "203 Non-Authoritative Information"],
            ["NoContentException", 204, "204 No Content"],
            ["ResetContentException", 205, "205 Reset Content"],
            ["PartialContentException", 206, "206 Partial Content"],
            ["MultiStatusException", 207, "207 Multi-Status"],
            ["AlreadyReportedException", 208, "208 Already Reported"],
            ["IMUsedException", 226, "226 IM Used"],
        ];
    }
}

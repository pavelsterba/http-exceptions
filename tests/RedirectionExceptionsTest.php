<?php

declare(strict_types=1);

use HttpException\HttpException;
use PHPUnit\Framework\TestCase;

/**
 * Tests for 3xx Redirection Exceptions.
 *
 * @author Pavel Sterba
 */
class RedirectionExceptionsTest extends TestCase
{
    /**
     * @var string
     */
    const EXCEPTION_CLASS_NAME_PATTERN = '\HttpException\Redirection\%s';

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
     * @dataProvider redirectionExceptionsProvider
     */
    public function checkExceptionType(string $exceptionName)
    {
        $e = $this->initializeException($exceptionName);

        $this->assertInstanceOf('\Exception', $e);
        $this->assertInstanceOf('\HttpException\HttpException', $e);
        $this->assertInstanceOf('\HttpException\RedirectionException', $e);
    }

    /**
     * @test
     * @dataProvider redirectionExceptionsProvider
     */
    public function checkExceptionNotType(string $exceptionName)
    {
        $e = $this->initializeException($exceptionName);

        $this->assertNotInstanceOf('\HttpException\InformationalException', $e);
        $this->assertNotInstanceOf('\HttpException\SuccessfulException', $e);
        $this->assertNotInstanceOf('\HttpException\ClientErrorException', $e);
        $this->assertNotInstanceOf('\HttpException\ServerErrorException', $e);
    }

    /**
     * @test
     * @dataProvider redirectionExceptionsProvider
     */
    public function checkStaticInitialization(string $exceptionName, int $exceptionCode)
    {
        $exceptionClassName = sprintf(self::EXCEPTION_CLASS_NAME_PATTERN, $exceptionName);
        $previousException = new \Exception();

        try {
            throw $exceptionClassName::get(self::CUSTOM_EXCEPTION_MESSAGE, $previousException);
        } catch (HttpException $e) {
            $this->assertInstanceOf('\HttpException\RedirectionException', $e);
            $this->assertEquals(self::CUSTOM_EXCEPTION_MESSAGE, $e->getMessage());
            $this->assertEquals($exceptionCode, $e->getCode());
            $this->assertEquals($previousException, $e->getPrevious());
        }
    }

    /**
     * Provider of Redirection Exceptions.
     * 
     * @return array
     */
    public function redirectionExceptionsProvider(): array
    {
        return [
            ["MultipleChoicesException", 300, "300 Multiple Choices"],
            ["MovedPermanentlyException", 301, "301 Moved Permanently"],
            ["FoundException", 302, "302 Found"],
            ["SeeOtherException", 303, "303 See Other"],
            ["NotModifiedException", 304, "304 Not Modified"],
            ["UseProxyException", 305, "305 Use Proxy"],
            ["TemporaryRedirectException", 307, "307 Temporary Redirect"],
            ["PermanentRedirectException", 308, "308 Permanent Redirect"],
        ];
    }
}

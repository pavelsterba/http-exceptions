<?php

declare(strict_types=1);

use HttpException\HttpException;
use PHPUnit\Framework\TestCase;

/**
 * Tests for 5xx Server Error Exceptions.
 *
 * @author Pavel Sterba
 */
class ServerErrorExceptionsTest extends TestCase
{
    /**
     * @var string
     */
    const EXCEPTION_CLASS_NAME_PATTERN = '\HttpException\ServerError\%s';

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
     * @dataProvider serverErrorExceptionsProvider
     */
    public function checkExceptionType(string $exceptionName)
    {
        $e = $this->initializeException($exceptionName);

        $this->assertInstanceOf('\Exception', $e);
        $this->assertInstanceOf('\HttpException\HttpException', $e);
        $this->assertInstanceOf('\HttpException\ServerErrorException', $e);
    }

    /**
     * @test
     * @dataProvider serverErrorExceptionsProvider
     */
    public function checkExceptionNotType(string $exceptionName)
    {
        $e = $this->initializeException($exceptionName);

        $this->assertNotInstanceOf('\HttpException\SuccessfulException', $e);
        $this->assertNotInstanceOf('\HttpException\RedirectionException', $e);
        $this->assertNotInstanceOf('\HttpException\InformationalException', $e);
        $this->assertNotInstanceOf('\HttpException\ClientErrorException', $e);
    }

    /**
     * @test
     * @dataProvider serverErrorExceptionsProvider
     */
    public function checkStaticInitialization(string $exceptionName, int $exceptionCode)
    {
        $exceptionClassName = sprintf(self::EXCEPTION_CLASS_NAME_PATTERN, $exceptionName);
        $previousException = new \Exception();

        try {
            throw $exceptionClassName::get(self::CUSTOM_EXCEPTION_MESSAGE, $previousException);
        } catch (HttpException $e) {
            $this->assertInstanceOf('\HttpException\ServerErrorException', $e);
            $this->assertEquals(self::CUSTOM_EXCEPTION_MESSAGE, $e->getMessage());
            $this->assertEquals($exceptionCode, $e->getCode());
            $this->assertEquals($previousException, $e->getPrevious());
        }
    }

    /**
     * Provider of Server Error Exceptions.
     * 
     * @return array
     */
    public function serverErrorExceptionsProvider(): array
    {
        return [
            ["InternalServerErrorException", 500, "500 Internal Server Error"],
            ["NotImplementedException", 501, "501 Not Implemented"],
            ["BadGatewayException", 502, "502 Bad Gateway"],
            ["ServiceUnavailableException", 503, "503 Service Unavailable"],
            ["GatewayTimeoutException", 504, "504 Gateway Timeout"],
            ["HTTPVersionNotSupportedException", 505, "505 HTTP Version Not Supported"],
            ["VariantAlsoNegotiatesException", 506, "506 Variant Also Negotiates"],
            ["InsufficientStorageException", 507, "507 Insufficient Storage"],
            ["LoopDetectedException", 508, "508 Loop Detected"],
            ["NotExtendedException", 510, "510 Not Extended"],
            ["NetworkAuthenticationRequiredException", 511, "511 Network Authentication Required"],
        ];
    }
}

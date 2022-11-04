<?php

declare(strict_types=1);

use HttpException\HttpException;
use PHPUnit\Framework\TestCase;

/**
 * Tests for 4xx Client Error Exceptions.
 *
 * @author Pavel Sterba
 */
class ClientErrorExceptionsTest extends TestCase
{
    /**
     * @var string
     */
    const EXCEPTION_CLASS_NAME_PATTERN = '\HttpException\ClientError\%s';

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
     * @dataProvider clientErrorExceptionsProvider
     */
    public function checkExceptionType(string $exceptionName)
    {
        $e = $this->initializeException($exceptionName);

        $this->assertInstanceOf('\Exception', $e);
        $this->assertInstanceOf('\HttpException\HttpException', $e);
        $this->assertInstanceOf('\HttpException\ClientErrorException', $e);
    }

    /**
     * @test
     * @dataProvider clientErrorExceptionsProvider
     */
    public function checkExceptionNotType(string $exceptionName)
    {
        $e = $this->initializeException($exceptionName);

        $this->assertNotInstanceOf('\HttpException\SuccessfulException', $e);
        $this->assertNotInstanceOf('\HttpException\RedirectionException', $e);
        $this->assertNotInstanceOf('\HttpException\InformationalException', $e);
        $this->assertNotInstanceOf('\HttpException\ServerErrorException', $e);
    }

    /**
     * @test
     * @dataProvider clientErrorExceptionsProvider
     */
    public function checkStaticInitialization(string $exceptionName, int $exceptionCode)
    {
        $exceptionClassName = sprintf(self::EXCEPTION_CLASS_NAME_PATTERN, $exceptionName);
        $previousException = new \Exception();

        try {
            throw $exceptionClassName::get(self::CUSTOM_EXCEPTION_MESSAGE, $previousException);
        } catch (HttpException $e) {
            $this->assertInstanceOf('\HttpException\ClientErrorException', $e);
            $this->assertEquals(self::CUSTOM_EXCEPTION_MESSAGE, $e->getMessage());
            $this->assertEquals($exceptionCode, $e->getCode());
            $this->assertEquals($previousException, $e->getPrevious());
        }
    }

    /**
     * Provider of Client Error Exceptions.
     * 
     * @return array
     */
    public function clientErrorExceptionsProvider(): array
    {
        return [
            ["BadRequestException", 400, "400 Bad Request"],
            ["UnauthorizedException", 401, "401 Unauthorized"],
            ["PaymentRequiredException", 402, "402 Payment Required"],
            ["ForbiddenException", 403, "403 Forbidden"],
            ["NotFoundException", 404, "404 Not Found"],
            ["MethodNotAllowedException", 405, "405 Method Not Allowed"],
            ["NotAcceptableException", 406, "406 Not Acceptable"],
            ["ProxyAuthenticationRequiredException", 407, "407 Proxy Authentication Required"],
            ["RequestTimeoutException", 408, "408 Request Timeout"],
            ["ConflictException", 409, "409 Conflict"],
            ["GoneException", 410, "410 Gone"],
            ["LengthRequiredException", 411, "411 Length Required"],
            ["PreconditionFailedException", 412, "412 Precondition Failed"],
            ["PayloadTooLargeException", 413, "413 Payload Too Large"],
            ["URITooLongException", 414, "414 URI Too Long"],
            ["UnsupportedMediaTypeException", 415, "415 Unsupported Media Type"],
            ["RangeNotSatisfiableException", 416, "416 Range Not Satisfiable"],
            ["ExpectationFailedException", 417, "417 Expectation Failed"],
            ["IMaTeapotException", 418, "418 I'm a teapot"],
            ["MisdirectedRequestException", 421, "421 Misdirected Request"],
            ["UnprocessableEntityException", 422, "422 Unprocessable Entity"],
            ["LockedException", 423, "423 Locked"],
            ["FailedDependencyException", 424, "424 Failed Dependency"],
            ["TooEarlyException", 425, "425 Too Early"],
            ["UpgradeRequiredException", 426, "426 Upgrade Required"],
            ["PreconditionRequiredException", 428, "428 Precondition Required"],
            ["TooManyRequestsException", 429, "429 Too Many Requests"],
            ["RequestHeaderFieldsTooLargeException", 431, "431 Request Header Fields Too Large"],
            ["UnavailableForLegalReasonsException", 451, "451 Unavailable For Legal Reasons"],
        ];
    }
}

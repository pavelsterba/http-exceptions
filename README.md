# HTTP Exceptions

If you are creating API, [SPL Exceptions](http://php.net/manual/en/spl.exceptions.php) are sometimes not the best choice to describe your problem. That is where **HTTP Exceptions** can be helpful.

Requested data not found? Unauthorized request? XML instead of JSON received? Throw relevant exception!

All HTTP statuses from [RFC 2616](http://tools.ietf.org/html/rfc2616) implemented as separated exceptions with following hierarchy.

```
Exception
\--- HttpException\Exception
    \--- HttpException\ClientErrorException
        \--- HttpException\BadRequestException
        \--- HttpException\UnauthorizedException
        \--- HttpException\PaymentRequiredException
        \--- HttpException\ForbiddenException
        \--- HttpException\NotFoundException
        \--- HttpException\MethodNotAllowedException
        \--- HttpException\NotAcceptableException
        \--- HttpException\ProxyAuthenticationRequiredException
        \--- HttpException\RequestTimeoutException
        \--- HttpException\ConflictException
        \--- HttpException\GoneException
        \--- HttpException\LengthRequiredException
        \--- HttpException\PreconditionFailedException
        \--- HttpException\RequestEntityTooLargeException
        \--- HttpException\RequestUriTooLongException
        \--- HttpException\UnsupportedMediaTypeException
        \--- HttpException\RequestedRangeNotSatisfiableException
        \--- HttpException\ExpectationFailedException
    \--- HttpException\ServerErrorException
        \--- HttpException\InternalServerErrorException
        \--- HttpException\NotImplementedException
        \--- HttpException\BadGatewayException
        \--- HttpException\ServiceUnavailableException
        \--- HttpException\GatewayTimeoutException
        \--- HttpException\HttpVersionNotSupportedException
```

All exceptions can be thrown without any additional information - message and code are predefined.

```
try {
    throw new HttpException\InternalServerErrorException();
} catch (HttpException\Exception $e) {
    echo $e->getMessage(); // 500 Internal Server Error
    echo $e->getCode(); // 500
}
```
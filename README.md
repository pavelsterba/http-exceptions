# HTTP Exceptions

If you are creating API, [SPL Exceptions](http://php.net/manual/en/spl.exceptions.php) are sometimes not the best choice to describe your problem. That is where **HTTP Exceptions** can be helpful.

Requested data not found? Unauthorized request? XML instead of JSON received? Throw relevant exception!

## Installation

Just add it as dependency to your project:

```
composer require pavelsterba/http-exceptions
```

## Usage

All exceptions can be thrown without any additional information - message and code are predefined.

```php
try {
    throw new HttpException\ServerError\InternalServerErrorException();
} catch (HttpException\HttpException $e) {
    echo $e->getMessage(); // 500 Internal Server Error
    echo $e->getCode(); // 500
}
```

To get customized instance of exception, you can pass parameters to exception as usual or use static function `get()`, where you have to specify only message and previous exception:

```php
use HttpException\ServerError\InternalServerErrorException;

try {
    // ...
} catch (Exception $ex) {
    throw InternalServerErrorException::get("Server down, sorry.", $ex);
}
```

## Structure

Your API can be fully exception driven since all HTTP statuses from [RFC 9110](https://httpwg.org/specs/rfc9110.html) are implemented as separated exceptions with following hierarchy:

```
Exception
└─ HttpException\HttpException
   ├─ HttpException\InformationalException
   │  ├─ HttpException\Informational\ContinueException
   │  ├─ HttpException\Informational\SwitchingProtocolsException
   │  ├─ HttpException\Informational\ProcessingException
   │  └─ HttpException\Informational\EarlyHintsException
   ├─ HttpException\SuccessfulException
   │  ├─ HttpException\Successful\OKException
   │  ├─ HttpException\Successful\CreatedException
   │  ├─ HttpException\Successful\AcceptedException
   │  ├─ HttpException\Successful\NonAuthoritativeInformationException
   │  ├─ HttpException\Successful\NoContentException
   │  ├─ HttpException\Successful\ResetContentException
   │  ├─ HttpException\Successful\PartialContentException
   │  ├─ HttpException\Successful\MultiStatusException
   │  ├─ HttpException\Successful\AlreadyReportedException
   │  └─ HttpException\Successful\IMUsedException
   ├─ HttpException\RedirectionException
   │  ├─ HttpException\Redirection\MultipleChoicesException
   │  ├─ HttpException\Redirection\MovedPermanentlyException
   │  ├─ HttpException\Redirection\FoundException
   │  ├─ HttpException\Redirection\SeeOtherException
   │  ├─ HttpException\Redirection\NotModifiedException
   │  ├─ HttpException\Redirection\UseProxyException
   │  ├─ HttpException\Redirection\TemporaryRedirectException
   │  └─ HttpException\Redirection\PermanentRedirectException
   ├─ HttpException\ClientErrorException
   │  ├─ HttpException\ClientError\BadRequestException
   │  ├─ HttpException\ClientError\UnauthorizedException
   │  ├─ HttpException\ClientError\PaymentRequiredException
   │  ├─ HttpException\ClientError\ForbiddenException
   │  ├─ HttpException\ClientError\NotFoundException
   │  ├─ HttpException\ClientError\MethodNotAllowedException
   │  ├─ HttpException\ClientError\NotAcceptableException
   │  ├─ HttpException\ClientError\ProxyAuthenticationRequiredException
   │  ├─ HttpException\ClientError\RequestTimeoutException
   │  ├─ HttpException\ClientError\ConflictException
   │  ├─ HttpException\ClientError\GoneException
   │  ├─ HttpException\ClientError\LengthRequiredException
   │  ├─ HttpException\ClientError\PreconditionFailedException
   │  ├─ HttpException\ClientError\PayloadTooLargeException
   │  ├─ HttpException\ClientError\URITooLongException
   │  ├─ HttpException\ClientError\UnsupportedMediaTypeException
   │  ├─ HttpException\ClientError\RangeNotSatisfiableException
   │  ├─ HttpException\ClientError\ExpectationFailedException
   │  ├─ HttpException\ClientError\IMaTeapotException
   │  ├─ HttpException\ClientError\MisdirectedRequestException
   │  ├─ HttpException\ClientError\UnprocessableEntityException
   │  ├─ HttpException\ClientError\LockedException
   │  ├─ HttpException\ClientError\FailedDependencyException
   │  ├─ HttpException\ClientError\TooEarlyException
   │  ├─ HttpException\ClientError\UpgradeRequiredException
   │  ├─ HttpException\ClientError\PreconditionRequiredException
   │  ├─ HttpException\ClientError\TooManyRequestsException
   │  ├─ HttpException\ClientError\RequestHeaderFieldsTooLargeException
   │  └─ HttpException\ClientError\UnavailableForLegalReasonsException
   └─ HttpException\ServerErrorException
      ├─ HttpException\ServerError\InternalServerErrorException
      ├─ HttpException\ServerError\NotImplementedException
      ├─ HttpException\ServerError\BadGatewayException
      ├─ HttpException\ServerError\ServiceUnavailableException
      ├─ HttpException\ServerError\GatewayTimeoutException
      ├─ HttpException\ServerError\HTTPVersionNotSupportedException
      ├─ HttpException\ServerError\VariantAlsoNegotiatesException
      ├─ HttpException\ServerError\InsufficientStorageException
      ├─ HttpException\ServerError\LoopDetectedException
      ├─ HttpException\ServerError\NotExtendedException
      └─ HttpException\ServerError\NetworkAuthenticationRequiredException
```

<?php
namespace HttpException;

/**
 * HTTP Exception service to throw exceptions related to status codes.
 *
 * @author Pavel Sterba <pavel.sterba@mall.cz>
 */
class ThrowHttpException
{
	/**
	 * Throw HTTP exception related to status code.
	 *
	 * @param int $code
	 * @throws \HttpException\Exception
	 */
	public static function byCode($code)
	{
		if (is_int($code)) {
			switch ($code) {
				case 400:
					throw new BadRequestException();
					break;
				case 401:
					throw new UnauthorizedException();
					break;
				case 402:
					throw new PaymentRequiredException();
					break;
				case 403:
					throw new ForbiddenException();
					break;
				case 404:
					throw new NotFoundException();
					break;
				case 405:
					throw new MethodNotAllowedException();
					break;
				case 406:
					throw new NotAcceptableException();
					break;
				case 407:
					throw new ProxyAuthenticationRequiredException();
					break;
				case 408:
					throw new RequestTimeoutException();
					break;
				case 409:
					throw new ConflictException();
					break;
				case 410:
					throw new GoneException();
					break;
				case 411:
					throw new LengthRequiredException();
					break;
				case 412:
					throw new PreconditionFailedException();
					break;
				case 413:
					throw new RequestEntityTooLargeException();
					break;
				case 414:
					throw new RequestUriTooLongException();
					break;
				case 415:
					throw new UnsupportedMediaTypeException();
					break;
				case 416:
					throw new RequestedRangeNotSatisfiableException();
					break;
				case 417:
					throw new ExpectationFailedException();
					break;
				case 500:
					throw new InternalServerErrorException();
					break;
				case 501:
					throw new NotImplementedException();
					break;
				case 502:
					throw new BadGatewayException();
					break;
				case 503:
					throw new ServiceUnavailableException();
					break;
				case 504:
					throw new GatewayTimeoutException();
					break;
				case 505:
					throw new HttpVersionNotSupportedException();
					break;
			}
		}
	}

	/**
	 * Throw HTTP exception related to status code with custom message.
	 *
	 * @param int $code
	 * @throws \HttpException\Exception
	 */
	public static function withMessage($code, $message)
	{
		if (is_int($code)) {
			switch ($code) {
				case 400:
					throw new BadRequestException($message);
					break;
				case 401:
					throw new UnauthorizedException($message);
					break;
				case 402:
					throw new PaymentRequiredException($message);
					break;
				case 403:
					throw new ForbiddenException($message);
					break;
				case 404:
					throw new NotFoundException($message);
					break;
				case 405:
					throw new MethodNotAllowedException($message);
					break;
				case 406:
					throw new NotAcceptableException($message);
					break;
				case 407:
					throw new ProxyAuthenticationRequiredException($message);
					break;
				case 408:
					throw new RequestTimeoutException($message);
					break;
				case 409:
					throw new ConflictException($message);
					break;
				case 410:
					throw new GoneException($message);
					break;
				case 411:
					throw new LengthRequiredException($message);
					break;
				case 412:
					throw new PreconditionFailedException($message);
					break;
				case 413:
					throw new RequestEntityTooLargeException($message);
					break;
				case 414:
					throw new RequestUriTooLongException($message);
					break;
				case 415:
					throw new UnsupportedMediaTypeException($message);
					break;
				case 416:
					throw new RequestedRangeNotSatisfiableException($message);
					break;
				case 417:
					throw new ExpectationFailedException($message);
					break;
				case 500:
					throw new InternalServerErrorException($message);
					break;
				case 501:
					throw new NotImplementedException($message);
					break;
				case 502:
					throw new BadGatewayException($message);
					break;
				case 503:
					throw new ServiceUnavailableException($message);
					break;
				case 504:
					throw new GatewayTimeoutException($message);
					break;
				case 505:
					throw new HttpVersionNotSupportedException($message);
					break;
			}
		}
	}
}

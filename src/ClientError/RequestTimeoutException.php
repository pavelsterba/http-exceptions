<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 408 Request Timeout
 * 
 * This response is sent on an idle connection by some servers, even without any previous request by the client. It means that the server would like to shut down this unused connection. This response is used much more since some browsers, like Chrome, Firefox 27+, or IE9, use HTTP pre-connection mechanisms to speed up surfing. Also note that some servers merely shut down the connection without sending this message.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/408
 * 
 * @author Pavel Sterba 
 */
class RequestTimeoutException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 408;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 408;

    /**
     * @var string
     */
    protected $message = "408 Request Timeout";
}

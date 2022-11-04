<?php

declare(strict_types=1);

namespace HttpException\Successful;

use HttpException\SuccessfulException;

/**
 * 200 OK
 * 
 * The request succeeded. The result meaning of "success" depends on the HTTP method:
 * 
 * - GET: The resource has been fetched and transmitted in the message body.
 * - HEAD: The representation headers are included in the response without any message body.
 * - PUT or POST: The resource describing the result of the action is transmitted in the message body.
 * - TRACE: The message body contains the request message as received by the server.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/200
 * 
 * @author Pavel Sterba 
 */
class OKException extends SuccessfulException
{
    /**
     * @var int
     */
    protected $code = 200;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 200;

    /**
     * @var string
     */
    protected $message = "200 OK";
}

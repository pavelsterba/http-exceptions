<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 428 Precondition Required
 * 
 * The origin server requires the request to be conditional. This response is intended to prevent the 'lost update' problem, where a client GETs a resource's state, modifies it and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/428
 * 
 * @author Pavel Sterba 
 */
class PreconditionRequiredException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 428;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 428;

    /**
     * @var string
     */
    protected $message = "428 Precondition Required";
}

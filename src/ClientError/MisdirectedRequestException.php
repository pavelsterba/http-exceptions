<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 421 Misdirected Request
 * 
 * The request was directed at a server that is not able to produce a response. This can be sent by a server that is not configured to produce responses for the combination of scheme and authority that are included in the request URI.
 * 
 * @author Pavel Sterba 
 */
class MisdirectedRequestException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 421;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 421;

    /**
     * @var string
     */
    protected $message = "421 Misdirected Request";
}

<?php

declare(strict_types=1);

namespace HttpException\Successful;

use HttpException\SuccessfulException;

/**
 * 203 Non-Authoritative Information
 * 
 * This response code means the returned metadata is not exactly the same as is available from the origin server, but is collected from a local or a third-party copy. This is mostly used for mirrors or backups of another resource. Except for that specific case, the 200 OK response is preferred to this status.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/203
 * 
 * @author Pavel Sterba 
 */
class NonAuthoritativeInformationException extends SuccessfulException
{
    /**
     * @var int
     */
    protected $code = 203;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 203;

    /**
     * @var string
     */
    protected $message = "203 Non-Authoritative Information";
}

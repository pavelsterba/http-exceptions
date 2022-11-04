<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 451 Unavailable For Legal Reasons
 * 
 * The user agent requested a resource that cannot legally be provided, such as a web page censored by a government.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/451
 * 
 * @author Pavel Sterba 
 */
class UnavailableForLegalReasonsException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 451;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 451;

    /**
     * @var string
     */
    protected $message = "451 Unavailable For Legal Reasons";
}

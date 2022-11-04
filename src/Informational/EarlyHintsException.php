<?php

declare(strict_types=1);

namespace HttpException\Informational;

use HttpException\InformationalException;

/**
 * 103 Early Hints
 * 
 * This status code is primarily intended to be used with the Link header, letting the user agent start preloading resources while the server prepares a response.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/103
 * 
 * @author Pavel Sterba 
 */
class EarlyHintsException extends InformationalException
{
    /**
     * @var int
     */
    protected $code = 103;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 103;

    /**
     * @var string
     */
    protected $message = "103 Early Hints";
}

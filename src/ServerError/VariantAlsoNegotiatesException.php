<?php

declare(strict_types=1);

namespace HttpException\ServerError;

use HttpException\ServerErrorException;

/**
 * 506 Variant Also Negotiates
 * 
 * The server has an internal configuration error: the chosen variant resource is configured to engage in transparent content negotiation itself, and is therefore not a proper end point in the negotiation process.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/506
 * 
 * @author Pavel Sterba 
 */
class VariantAlsoNegotiatesException extends ServerErrorException
{
    /**
     * @var int
     */
    protected $code = 506;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 506;

    /**
     * @var string
     */
    protected $message = "506 Variant Also Negotiates";
}

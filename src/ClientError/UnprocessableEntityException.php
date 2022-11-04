<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 422 Unprocessable Entity
 * 
 * The request was well-formed but was unable to be followed due to semantic errors.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/422
 * 
 * @author Pavel Sterba 
 */
class UnprocessableEntityException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 422;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 422;

    /**
     * @var string
     */
    protected $message = "422 Unprocessable Entity";
}

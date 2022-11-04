<?php

declare(strict_types=1);

namespace HttpException\ServerError;

use HttpException\ServerErrorException;

/**
 * 507 Insufficient Storage
 * 
 * The method could not be performed on the resource because the server is unable to store the representation needed to successfully complete the request.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/507
 * 
 * @author Pavel Sterba 
 */
class InsufficientStorageException extends ServerErrorException
{
    /**
     * @var int
     */
    protected $code = 507;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 507;

    /**
     * @var string
     */
    protected $message = "507 Insufficient Storage";
}

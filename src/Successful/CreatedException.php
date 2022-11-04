<?php

declare(strict_types=1);

namespace HttpException\Successful;

use HttpException\SuccessfulException;

/**
 * 201 Created
 * 
 * The request succeeded, and a new resource was created as a result. This is typically the response sent after POST requests, or some PUT requests.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/201
 * 
 * @author Pavel Sterba 
 */
class CreatedException extends SuccessfulException
{
    /**
     * @var int
     */
    protected $code = 201;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 201;

    /**
     * @var string
     */
    protected $message = "201 Created";
}

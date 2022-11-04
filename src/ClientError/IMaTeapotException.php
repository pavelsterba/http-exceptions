<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 418 I'm a teapot
 * 
 * The server refuses the attempt to brew coffee with a teapot.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/418
 * 
 * @author Pavel Sterba 
 */
class IMaTeapotException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 418;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 418;

    /**
     * @var string
     */
    protected $message = "418 I'm a teapot";
}

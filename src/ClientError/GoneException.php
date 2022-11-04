<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 410 Gone
 * 
 * This response is sent when the requested content has been permanently deleted from server, with no forwarding address. Clients are expected to remove their caches and links to the resource. The HTTP specification intends this status code to be used for "limited-time, promotional services". APIs should not feel compelled to indicate resources that have been deleted with this status code.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/410
 * 
 * @author Pavel Sterba 
 */
class GoneException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 410;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 410;

    /**
     * @var string
     */
    protected $message = "410 Gone";
}

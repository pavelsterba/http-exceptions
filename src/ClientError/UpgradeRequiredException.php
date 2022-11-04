<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 426 Upgrade Required
 * 
 * The server refuses to perform the request using the current protocol but might be willing to do so after the client upgrades to a different protocol. The server sends an Upgrade header in a 426 response to indicate the required protocol(s).
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/426
 * 
 * @author Pavel Sterba 
 */
class UpgradeRequiredException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 426;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 426;

    /**
     * @var string
     */
    protected $message = "426 Upgrade Required";
}

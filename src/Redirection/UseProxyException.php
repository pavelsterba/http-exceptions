<?php

declare(strict_types=1);

namespace HttpException\Redirection;

use HttpException\RedirectionException;

/**
 * 305 Use Proxy
 * 
 * Defined in a previous version of the HTTP specification to indicate that a requested response must be accessed by a proxy. It has been deprecated due to security concerns regarding in-band configuration of a proxy.
 * 
 * @deprecated
 * 
 * @author Pavel Sterba 
 */
class UseProxyException extends RedirectionException
{
    /**
     * @var int
     */
    protected $code = 305;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 305;

    /**
     * @var string
     */
    protected $message = "305 Use Proxy";
}

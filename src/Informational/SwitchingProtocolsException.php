<?php

declare(strict_types=1);

namespace HttpException\Informational;

use HttpException\InformationalException;

/**
 * 101 Switching Protocols
 * 
 * This code is sent in response to an Upgrade request header from the client and indicates the protocol the server is switching to.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/101
 * 
 * @author Pavel Sterba 
 */
class SwitchingProtocolsException extends InformationalException
{
    /**
     * @var int
     */
    protected $code = 101;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 101;

    /**
     * @var string
     */
    protected $message = "101 Switching Protocols";
}

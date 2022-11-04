<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 423 Locked
 * 
 * The resource that is being accessed is locked.
 * 
 * @author Pavel Sterba 
 */
class LockedException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 423;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 423;

    /**
     * @var string
     */
    protected $message = "423 Locked";
}

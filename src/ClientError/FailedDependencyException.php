<?php

declare(strict_types=1);

namespace HttpException\ClientError;

use HttpException\ClientErrorException;

/**
 * 424 Failed Dependency
 * 
 * The request failed due to failure of a previous request.
 * 
 * @author Pavel Sterba 
 */
class FailedDependencyException extends ClientErrorException
{
    /**
     * @var int
     */
    protected $code = 424;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 424;

    /**
     * @var string
     */
    protected $message = "424 Failed Dependency";
}

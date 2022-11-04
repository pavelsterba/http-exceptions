<?php

declare(strict_types=1);

namespace HttpException\Successful;

use HttpException\SuccessfulException;

/**
 * 207 Multi-Status
 * 
 * Conveys information about multiple resources, for situations where multiple status codes might be appropriate.
 * 
 * @author Pavel Sterba 
 */
class MultiStatusException extends SuccessfulException
{
    /**
     * @var int
     */
    protected $code = 207;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 207;

    /**
     * @var string
     */
    protected $message = "207 Multi-Status";
}

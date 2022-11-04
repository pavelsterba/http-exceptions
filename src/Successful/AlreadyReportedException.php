<?php

declare(strict_types=1);

namespace HttpException\Successful;

use HttpException\SuccessfulException;

/**
 * 208 Already Reported
 * 
 * Used inside a <dav:propstat> response element to avoid repeatedly enumerating the internal members of multiple bindings to the same collection.
 * 
 * @author Pavel Sterba 
 */
class AlreadyReportedException extends SuccessfulException
{
    /**
     * @var int
     */
    protected $code = 208;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 208;

    /**
     * @var string
     */
    protected $message = "208 Already Reported";
}

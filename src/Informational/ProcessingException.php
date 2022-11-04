<?php

declare(strict_types=1);

namespace HttpException\Informational;

use HttpException\InformationalException;

/**
 * 102 Processing
 * 
 * This code indicates that the server has received and is processing the request, but no response is available yet.
 * 
 * @author Pavel Sterba 
 */
class ProcessingException extends InformationalException
{
    /**
     * @var int
     */
    protected $code = 102;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 102;

    /**
     * @var string
     */
    protected $message = "102 Processing";
}

<?php

declare(strict_types=1);

namespace HttpException\Redirection;

use HttpException\RedirectionException;

/**
 * 302 Found
 * 
 * This response code means that the URI of requested resource has been changed temporarily. Further changes in the URI might be made in the future. Therefore, this same URI should be used by the client in future requests.
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/302
 * 
 * @author Pavel Sterba 
 */
class FoundException extends RedirectionException
{
    /**
     * @var int
     */
    protected $code = 302;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 302;

    /**
     * @var string
     */
    protected $message = "302 Found";
}

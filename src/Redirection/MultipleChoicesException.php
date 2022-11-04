<?php

declare(strict_types=1);

namespace HttpException\Redirection;

use HttpException\RedirectionException;

/**
 * 300 Multiple Choices
 * 
 * The request has more than one possible response. The user agent or user should choose one of them. (There is no standardized way of choosing one of the responses, but HTML links to the possibilities are recommended so the user can pick.)
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/300
 * 
 * @author Pavel Sterba 
 */
class MultipleChoicesException extends RedirectionException
{
    /**
     * @var int
     */
    protected $code = 300;

    /**
     * @var int
     * @deprecated
     */
    protected static int $statusCode = 300;

    /**
     * @var string
     */
    protected $message = "300 Multiple Choices";
}

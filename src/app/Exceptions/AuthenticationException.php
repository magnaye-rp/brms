<?php

namespace App\Exceptions;

use Exception;

class AuthenticationException extends Exception
{
    /**
     * The authentication error message.
     *
     * @var string
     */
    protected $message = 'Authentication failed';

    /**
     * The authentication error code.
     *
     * @var string
     */
    protected string $errorCode;

    /**
     * Create a new authentication exception.
     */
    public function __construct(string $message = 'Authentication failed', string $errorCode = 'auth_failed')
    {
        $this->message = $message;
        $this->errorCode = $errorCode;
        parent::__construct($this->message);
    }

    /**
     * Get the error code.
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }
}


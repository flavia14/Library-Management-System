<?php

declare(strict_types=1);

namespace App\Exception;

use InvalidArgumentException;
use Throwable;

/**
 * Exception thrown for invalid email address format.
 */
class InvalidEmailException extends InvalidArgumentException
{
    /**
     * Constructor.
     *
     * @param string $message The exception message.
     * @param int $code The exception code.
     * @param Throwable|null $previous The previous throwable used for the exception chaining.
     */
    public function __construct(
        string $message = 'Invalid email address format',
        int $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}

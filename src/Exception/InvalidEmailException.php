<?php

declare(strict_types=1);

namespace App\Exception;

use InvalidArgumentException;
use Throwable;

class InvalidEmailException extends InvalidArgumentException
{
    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $message = 'Invalid email address format',
        int $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}

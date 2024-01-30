<?php

declare(strict_types=1);

namespace App\Exception;

use Exception;
use Throwable;

class MaxBooksLimitReachedException extends Exception
{
    /**
     * @param Throwable|null $previous
     */
    public function __construct(
        string $message = 'Maximum books limit reached.',
        int $code = 0,
        Throwable $previous = null,
    ) {
        parent::__construct($message, $code, $previous);
    }
}

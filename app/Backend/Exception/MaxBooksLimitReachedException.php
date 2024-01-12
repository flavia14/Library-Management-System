<?php

declare(strict_types=1);

namespace Exception;

use Exception;
use Throwable;

class MaxBooksLimitReachedException extends Exception
{
    public function __construct(string $message = 'Maximum books limit reached.', int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

<?php

declare(strict_types=1);

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public int $id;
    public string $name;

    /** @phpcsSuppress SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint */
    protected $table = 'test';
}

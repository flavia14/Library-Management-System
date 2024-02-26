<?php

declare(strict_types=1);

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /** @phpcsSuppress MalevolentCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint */
    public $timestamps = false;
    public int $id;
    public string $name;

    /** @phpcsSuppress MalevolentCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint */
    protected $table = 'test';
}

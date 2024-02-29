<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class MigrationHistory extends Model
{
    public \DateTime $date;
    protected $table = 'migration_history';
    protected $fillable = ['migration_name', 'date'];
}

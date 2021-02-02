<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'complete', 'school'];
}
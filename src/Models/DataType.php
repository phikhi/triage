<?php

namespace Phikhi\Triage\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uuid',
        'slug',
    ];
}

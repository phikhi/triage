<?php

namespace Phikhi\Triage\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Phikhi\Triage\Models\Enums\DataProviderStatus;

class DataProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uuid',
        'slug',
        'status',
    ];

    protected $casts = [
        'status' => DataProviderStatus::class,
    ];
}

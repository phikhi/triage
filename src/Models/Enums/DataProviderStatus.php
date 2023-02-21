<?php

namespace Phikhi\Triage\Models\Enums;

use Phikhi\Triage\Models\Enums\Traits\HasValues;

enum DataProviderStatus: string
{
    use HasValues;

    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case UNAVAILABLE = 'unavailable';
    case ARCHIVED = 'archived';
}

<?php

namespace Phikhi\Triage\Models\Enums\Traits;

trait HasValues
{
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

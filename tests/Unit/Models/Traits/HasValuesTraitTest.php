<?php

use Phikhi\Triage\Models\Enums\DataProviderStatus;

it('lists the backed enums values in an array', function ($enum) {
    expect($enum::values())->toBeArray();
})->with([
    class_basename($class = DataProviderStatus::class) => $class,
]);

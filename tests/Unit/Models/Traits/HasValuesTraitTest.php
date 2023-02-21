<?php

use Phikhi\Triage\Models\Enums\DataProviderStatus;

it('lists the backed enums values in an array', function () {
    expect(DataProviderStatus::values())->toBeArray();
});

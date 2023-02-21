<?php

use Phikhi\Triage\Models\DataProvider;
use Phikhi\Triage\Models\Enums\DataProviderStatus;

it('can be created', function () {
    $dataProvider = DataProvider::factory()->create();

    $this->assertInstanceOf(DataProvider::class, $dataProvider);
    $this->assertInstanceOf(DataProviderStatus::class, $dataProvider->status);

    $this->assertDatabaseHas('data_providers', [
        'id' => $dataProvider->id,
        'name' => $dataProvider->name,
        'uuid' => $dataProvider->uuid,
        'slug' => $dataProvider->slug,
        'status' => $dataProvider->status,
    ]);
});

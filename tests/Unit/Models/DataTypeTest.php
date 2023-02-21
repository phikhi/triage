<?php

use Phikhi\Triage\Models\DataType;

it('can be created', function () {
    $dataType = DataType::factory()->create();

    $this->assertInstanceOf(DataType::class, $dataType);

    $this->assertDatabaseHas('data_types', [
        'id' => $dataType->id,
        'name' => $dataType->name,
        'uuid' => $dataType->uuid,
        'slug' => $dataType->slug,
    ]);
});

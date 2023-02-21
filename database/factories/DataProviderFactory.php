<?php

namespace Phikhi\Triage\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Phikhi\Triage\Models\DataProvider;
use Phikhi\Triage\Models\Enums\DataProviderStatus;

class DataProviderFactory extends Factory
{
    protected $model = DataProvider::class;

    public function definition()
    {
        return [
            'name' => $name = $this->faker->company(),
            'uuid' => Str::uuid(),
            'slug' => Str::slug($name),
            'status' => DataProviderStatus::ACTIVE,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

    public function inactive()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => DataProviderStatus::INACTIVE,
            ];
        });
    }

    public function archived()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => DataProviderStatus::ARCHIVED,
            ];
        });
    }

    public function unavailable()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => DataProviderStatus::UNAVAILABLE,
            ];
        });
    }
}

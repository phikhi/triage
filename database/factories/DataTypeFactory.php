<?php

namespace Phikhi\Triage\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Phikhi\Triage\Models\DataType;

class DataTypeFactory extends Factory
{
    protected $model = DataType::class;

    public function definition()
    {
        return [
            'name' => $name = $this->faker->company(),
            'uuid' => Str::uuid(),
            'slug' => Str::slug($name),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

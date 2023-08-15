<?php

namespace Database\Factories;

use App\Models\Vehicles;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiclesFactory extends Factory
{
    protected $model = Vehicles::class;

    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            'make' => $faker->company,
            'model' => $faker->word,
            'vin' => $faker->unique()->randomNumber(6),
            'body_type' => $faker->randomElement(['SUV', 'Coupe', 'Hatchback', 'Sedan']),
            'year' => $faker->numberBetween(2000, 2023),
            'fuel_type' => $faker->randomElement(['Gasoline', 'Diesel', 'Electric', 'Hybrid']),
            'transmission' => $faker->randomElement(['Automatic', 'Manual']),
            'mileage' => $faker->numberBetween(1000, 100000),
            'color' => $faker->colorName,
            'luggage' => $faker->randomElement(['Small', 'Medium', 'Large']),
            'doors' => $faker->randomElement(['2', '4', '5']),
            'price' => $faker->numberBetween(50, 300),
            'passengers' => $faker->numberBetween(2, 8),
            'short_Description' => $faker->text(200), // 200 characters
            'description' => $faker->paragraphs(1, true), // 3 paragraphs
            'availability' => true,
        ];
    }
}
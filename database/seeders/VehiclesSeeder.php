<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Vehicles;
use Illuminate\Database\Eloquent\Factories\Factory;
class VehiclesSeeder extends Seeder
{
    public function run()
    {
        Vehicles::factory(50)->create();
    }
}

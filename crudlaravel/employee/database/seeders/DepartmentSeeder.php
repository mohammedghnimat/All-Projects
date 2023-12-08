<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Generate 5 random departments with realistic data
        $names = [];
        for ($i = 1; $i <= 5; $i++) {
            $name = $faker->unique()->company;

            // Ensure uniqueness
            while (in_array($name, $names)) {
                $name = $faker->unique()->company;
            }

            $names[] = $name;

            DB::table('departments')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}

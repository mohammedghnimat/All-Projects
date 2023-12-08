<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Generate 20 unique random employee names and salaries
        $employeeData = [];
        $departmentIds = \App\Models\Department::pluck('id')->toArray();

        for ($i = 1; $i <= 20; $i++) {
            $name = $faker->unique()->name;
            $salary = $faker->randomFloat(2, 30000, 100000); // Adjust salary range as needed
            $departmentId = $faker->randomElement($departmentIds);

            $employeeData[] = [
                'name' => $name,
                'salary' => $salary,
                'dep_id' => $departmentId,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert data into the 'employees' table
        DB::table('employees')->insert($employeeData);
    }
}


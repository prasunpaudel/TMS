<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker= Faker::Create();

        foreach(range(1,50) as $key=>$value)
        {
            Task::Create([
                'name'=>$faker->name(),
                'email'=>$faker->unique()->safeEmail(),


            ]);
        }
    }
}

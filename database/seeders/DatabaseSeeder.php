<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //fake Data for today
        Employee::factory(6)->create([
            'created_at' => Carbon::today(),
        ]);
        //fake Data for yesterday
        Employee::factory(6)->create([
            'created_at' => Carbon::yesterday(),
        ]);
        //fake Data for this week
        Employee::factory(6)->create([
            'created_at' => Carbon::now()->startOfWeek(),
        ])->each(function($post){
            $post->created_at = $post->created_at->addMinutes(rand(1,1440 * 6));
        });
        // fake data for the last week
        Employee::factory(6)->create([
            'created_at' => Carbon::now()->startOfWeek()->subWeeks(),
        ])->each(function($post){
            $post->created_at = $post->created_at->addMinutes(rand(1,1440 * 6));
        });
        
        
        //fake Data for this month
        Employee::factory(6)->create([
            'created_at' => Carbon::now()->startOfMonth(),
        ])->each(function($post){
            $post->created_at = $post->created_at->addMinutes(rand(1,1440 * 30));
        });
        // fake data for the last month
        Employee::factory(6)->create([
            'created_at' => Carbon::now()->startOfMonth()->subMonth(),
        ])->each(function($post){
            $post->created_at = $post->created_at->addMinutes(rand(1,1440 * 30));
        });
        // fake Data for this year
        Employee::factory(6)->create([
            'created_at' => Carbon::now()->startOfYear(),
        ])->each(function($post){
            $post->created_at = $post->created_at->addMinutes(rand(1,1440 * 365));
        });
        // fake data for the last year
        Employee::factory(6)->create([
            'created_at' => Carbon::now()->startOfYear()->subYear(),
        ])->each(function($post){
            $post->created_at = $post->created_at->addMinutes(rand(1,1440 * 365));
        });

    }
}

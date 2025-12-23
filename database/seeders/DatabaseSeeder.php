<?php

namespace Database\Seeders;

use App\Models\ProductType;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        $types = [
        ['name' => 'Type 1', 'modifier_percent' => 0],
        ['name' => 'Type 2', 'modifier_percent' => 10],
        ['name' => 'Type 3', 'modifier_percent' => 20],
        ['name' => 'Type 4', 'modifier_percent' => 30],
        ['name' => 'Type 5', 'modifier_percent' => 40],
        ['name' => 'Type 6', 'modifier_percent' => 50],
        ['name' => 'Type 7', 'modifier_percent' => 60],
        ['name' => 'Type 8', 'modifier_percent' => 70],
    ];
    foreach ($types as $t) ProductType::create($t);
    }
}

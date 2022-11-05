<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Category::factory(20)->create();
         \App\Models\Product::factory(100)->create();
         \App\Models\Post::factory(100)->create();
         \App\Models\Customer::factory(100)->create();
         \App\Models\Invoice::factory(100)->create();
         \App\Models\Comments::factory(100)->create();

         \App\Models\User::factory()->create([
             'name' => 'علی ناصریان',
             'username' => 'CyberAli',
             'email' => 'admin@info.com',
         ]);

         $this->call([
            ProductSeeder::class
         ]);
    }
}

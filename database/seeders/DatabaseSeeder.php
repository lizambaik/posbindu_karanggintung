<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'email' => 'admin@admin.com',
            'name' => 'admin',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ]);
        // \App\Models\User::factory(10)->create();
    }
}

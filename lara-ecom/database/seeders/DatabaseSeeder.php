<?php

namespace Database\Seeders;

use App\Models\Role;
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




        $this->call(RoleSeeder::class);
        $user = User::factory()->create([
            'first_name' => 'Alex',
            'last_name' => 'Zab',
            'email' => 'test@example.com',
        ]);

        $user->roles()->attach(Role::where('name', 'admin')->first());
    }
}

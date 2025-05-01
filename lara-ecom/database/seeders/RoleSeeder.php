<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'description' => 'Super user'
        ]);

        Role::create([
            'name' => 'stock-taker',
            'description' => 'Stock taker'
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
          $superAdminRole = Role::create(['name' => 'Super Admin']);

        // Create the Super Admin
            Admin::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@tadvanam.org',
            'password' => Hash::make('123123123'),
            'role_id' => $superAdminRole->id,
        ]);
    }
}

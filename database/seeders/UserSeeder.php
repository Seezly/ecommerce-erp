<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = Role::where('name', 'superadmin')->first();
        $owner = Role::where('name', 'owner')->first();

        // 🔹 Superadmin
        User::create([
            'business_id' => Business::SYSTEM_ID,
            'name' => 'Super Admin',
            'email' => 'admin@system.com',
            'password' => Hash::make('password'),
            'role_id' => $superadmin->id,
        ]);

        // 🔹 Usuario normal
        $business = Business::where('name', 'Demo Store')->first();

        User::create([
            'business_id' => $business->id,
            'name' => 'Demo User',
            'email' => 'user@demo.com',
            'password' => Hash::make('password'),
            'role_id' => $owner->id,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
        "name" => "Admin User",
        "email" => "admin@admin.com",
        "role" => UserRole::Admin,
        "password" => Hash::make('123456789')      
       ]);
    }
}

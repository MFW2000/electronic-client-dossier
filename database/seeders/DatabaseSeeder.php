<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (app()->environment('local')) {
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@ecd.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'is_admin' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            User::factory(2)->create();
            User::factory(1)->unverified()->create();
        }
    }
}

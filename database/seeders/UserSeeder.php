<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = collect([
            [
                'name' => 'Saleem',
                'email' => 'saleemtyre@admin.com',
                'email_verified_at' => now(),
                'password' => bcrypt('saleem325'),
                'created_at' => now(),
                'uuid' => Str::uuid(),
                'photo' => 'admin.jpg'
            ],
        ]);

        $users->each(function ($user) {
            User::insert($user);
        });
    }
}

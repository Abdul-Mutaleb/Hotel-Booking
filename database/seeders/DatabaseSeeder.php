<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ["name"=> "Abdul Mutaleb",
             "email"=> "abdulmutaleb.puc@gmail.com", 
             "phone"=> "01319245857", 
             "role"=> "admin", 
             "password"=> Hash::make("12345678"),
             "created_at" => now(),
             "updated_at" => now()
             ]

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@adminmail.com',
                'fname' => 'Admin',
                'lname' => 'One',
                'password' => Hash::make('12345678'),
                'role_as' => 'admin',
                'created_at' => $faker->dateTimeThisYear,
                'updated_at' => $faker->dateTimeThisYear,
            ],
            [
                'name' => 'User',
                'email' => 'user@usermail.com',
                'fname' => 'User',
                'lname' => 'One',
                'password' => Hash::make('12345678'),
                'role_as' => 'user',
                'created_at' => $faker->dateTimeThisYear,
                'updated_at' => $faker->dateTimeThisYear,
            ]
        ]);
    }
}

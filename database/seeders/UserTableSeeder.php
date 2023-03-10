<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				DB::table('users')->insert([
					'name' => 'ilyas elmalki',
					'email' => 'ilyaselmalki@gmail.com',
					'password' => Hash::make('ridaridarida'),
					'remember_token' => Str::random(10),
				]);
    }
}
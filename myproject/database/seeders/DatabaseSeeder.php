<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Use Hash facade
use App\Models\User; // Import the User model

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Vui Tung Phut Giay',
            'email' => 'vuiqua@gmail.com',
            'idgroup' => 1,
            'diachi' => 'TPHCM',
            'password' => Hash::make('hehe'), 
        ]);

        DB::table('users')->insert([
            'name' => 'Buon Tung Phut Giay',
            'email' => 'buonqua@gmail.com',
            'idgroup' => 1,
            'diachi' => 'TPHCM',
            'password' => Hash::make('huhu'),
        ]);

        DB::table('users')->insert([
            'name' => 'Nguyen Thi Gia Hu',
            'email' => 'giahu@gmail.com',
            'idgroup' => 0,
            'diachi' => 'HN',
            'password' => Hash::make('hihi'),
        ]);
    }
}

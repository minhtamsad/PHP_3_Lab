<?php

namespace Database\Seeders;

use Arr;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ThanhVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ho = ['Nguyen', 'Le', 'Phan', 'Do', 'HO', 'VO', 'Bui'];
        $lot = ['Thi', 'Van', 'Duc', 'Ngoc', 'Hoang', 'Minh', 'Kim', ''];
        $ten = ['Tam', 'Thao', 'Hai', 'Hoa', 'Hao', 'Thanh', 'Tu', 'Hau', 'Phuong'];
        for($i=0; $i<100; $i++){
            $ht = Arr::random($ho) . ' ' . Arr::random($lot) . ' ' . Arr::random($ten);
            DB::table('thanhvien')->insert([
                'hoTen' => $ht,
                'email' => Str::random(5) . '@gmail.com',
                'password' => bcrypt('hehe')
        ]);
    }
    }
}

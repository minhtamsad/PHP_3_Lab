<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoaiSPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loaiSP')->insert([
            ['tenLoai' => 'Điện thoại', 'thuTu' => 1, 'anHien' => 1, 'urlHinh' => null],
            ['tenLoai' => 'Laptop', 'thuTu' => 2, 'anHien' => 1, 'urlHinh' => null],
            ['tenLoai' => 'Máy tính bảng', 'thuTu' => 3, 'anHien' => 1, 'urlHinh' => null],
        ]);
    }
}

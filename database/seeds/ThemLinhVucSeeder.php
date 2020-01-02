<?php

use Illuminate\Database\Seeder;

class ThemLinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\NguoiChoi::create([
            'linh_vuc' => 'Thể thao',
        ]);
        App\NguoiChoi::create([
            'linh_vuc' => 'Lịch sử',
        ]);
        App\NguoiChoi::create([
            'linh_vuc' => 'Âm nhạc – Phim',
        ]);
        App\NguoiChoi::create([
            'linh_vuc' => 'Địa lý',
        ]);
        App\NguoiChoi::create([
            'linh_vuc' => 'Văn học',
        ]);
        App\NguoiChoi::create([
            'linh_vuc' => 'Y học',
        ]);
        App\NguoiChoi::create([
            'linh_vuc' => 'Văn hoá - Sự kiện',
        ]);
        App\NguoiChoi::create([
            'linh_vuc' => 'Khoa học tự nhiên',
        ]);
    }
}

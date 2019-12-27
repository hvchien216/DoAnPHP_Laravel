<?php

use Illuminate\Database\Seeder;

class ThemNguoiChoiJWT extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\NguoiChoi::create([
            'ten_dang_nhap' => 'nc1',
                'mat_khau'		=> Hash::make('123'),
                'email' =>"asd@gmail.com"
        ]);
        App\NguoiChoi::create([
            'ten_dang_nhap' => 'nc2',
                'mat_khau'		=> Hash::make('1234'),
                'email' =>"asd@gmail.com"
                
        ]);
    }
}

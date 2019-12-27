<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginConTroller extends Controller
{
    public function dangNhap(Request $request){
       
        // Authenticate
        if(!$token = auth('api')->attempt([
            'ten_dang_nhap' => $request->ten_dang_nhap,
            'password' => $request->mat_khau 
        ]))
        {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized.' 
            ],401);
        }
        
        return response()->json([
            'status' => true,
            'message' => 'Authorized.',
            'token' => $token,
            'type' => 'bearer'
        ],200);
        
    }

    public function layThongTin()
    {
        return auth('api')->user();
    }
}

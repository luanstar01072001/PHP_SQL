<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GioHangController extends Controller
{
    public function themVaoGioHang(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
}

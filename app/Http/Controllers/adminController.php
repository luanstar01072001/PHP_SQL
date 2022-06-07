<?php

namespace App\Http\Controllers;

use App\Model\MyPham;
use App\Model\HoaDonBan;
use App\Model\ChiTietHoaDonBan;
use App\Model\KhachHang;
use App\Model\LoaiMyPham;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
      $Mypham=Mypham::where('status',1)->get();
      // $sanpham=sanpham::where('status',1)->sum('soluong');

      $account=KhachHang::all();
      // $cart=Cart::content();
      return view('admin.thongke.index',compact('Mypham'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Model\KhachHang;

use App\Model\DonHang;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class DonhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $donhang= DonHang::orderBy('id')->get(); 

        
        return view('admin.donhang.index',compact('donhang'))->with('i');   
        // $donhang = DonHang::orderBy('id')->get();
        // $all_order = DonHang::join('khach_hang', 'don_hang.kh_ten', '=', 'khach_hang.id')
        //     ->select('don_hang.*', 'khach_hang.ten_kh')
        //     ->orderby('don_hang.id', 'desc')->get();
        // return view('admin.donhang.index', compact('donhang', 'all_order'))->with('i');
    
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

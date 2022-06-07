<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\KhachHang;


class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KhachHang= KhachHang::orderBy('id')->get(); 
        return view('admin.KhachHang.index',compact('KhachHang'))->with('i');
       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $KhachHang=KhachHang::where('id')->get();
        return view('admin.KhachHang.create')->with(compact('KhachHang'));
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KhachHang::create($request->all());
        return  redirect()->route ('KhachHang.index')->with('success','Đã thêm thành công.');
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(KhachHang $KhachHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KhachHang $KhachHang)
    {
        return view('admin.KhachHang.edit')->with(compact('KhachHang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,KhachHang $KhachHang)
    {
        $KhachHang->update($request->only('ten_kh','email','sdt'));
        return redirect()->route('KhachHang.index')->with('success','đã cập nhật 1 khách hàng .');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KhachHang $KhachHang)
    {
        $KhachHang -> delete();
        return redirect()->route('KhachHang.index')->with('success','xóa sản phẩm thành công');
       }
}

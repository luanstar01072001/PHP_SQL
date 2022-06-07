<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\LoaiMyPham;



class LoaiMyPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $LoaiMyPham= LoaiMyPham::orderBy('id')->get();
        return view('admin.LoaiMyPham.index',compact('LoaiMyPham'))->with('i');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $LoaiMyPham=LoaiMyPham::where('id')->get();
        return view('admin.LoaiMyPham.create')->with(compact('LoaiMyPham'));
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LoaiMyPham::create($request->all());
        return  redirect()->route ('LoaiMyPham.index')->with('success','Đã thêm thành công.');
   
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiMyPham $LoaiMyPham )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiMyPham $LoaiMyPham)
    {
        return view('admin.LoaiMyPham.edit')->with(compact('LoaiMyPham'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiMyPham $LoaiMyPham)
    {
        $LoaiMyPham->update($request->only('TENLOAI','CHITIET'));
        return redirect()->route('LoaiMyPham.index')->with('success','Đã cập nhật 1 sản phẩm .');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoaiMyPham $LoaiMyPham)
    {
        $LoaiMyPham -> delete();
        return redirect()->route('LoaiMyPham.index')->with('success','Xóa sản phẩm thành công');
       }
}

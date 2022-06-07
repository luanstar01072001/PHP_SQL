<?php

namespace App\Http\Controllers;
use App\Model\NhaCungCap;

use Illuminate\Http\Request;

class NhaCungCapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $NhaCungCap= NhaCungCap::orderBy('id')->get();
        
        return view('admin.NhaCungCap.index',compact('NhaCungCap'))->with('i');
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $NhaCungCap=NhaCungCap::where('id')->get();
        return view('admin.NhaCungCap.create')->with(compact('NhaCungCap'));
       }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        NhaCungCap::create($request->all());
        return  redirect()->route ('NhaCungCap.index')->with('success','Đã thêm thành công.');
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(NhaCungCap $NhaCungCap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(NhaCungCap $NhaCungCap)
    {
       return view('admin.NhaCungCap.edit')->with(compact('NhaCungCap'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,NhaCungCap $NhaCungCap )
    {
        $NhaCungCap->update($request->only('ten_ncc'));
        return redirect()->route('NhaCungCap.index')->with('success','Đã cập nhật 1 sản phẩm .');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\NhanVien;
use DateTime;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $NhanVien= NhanVien::orderBy('id')->get();
        return view('admin.NhanVien.index',compact('NhanVien'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $NhanVien=NhanVien::where('id')->get();
        return view('admin.NhanVien.create')->with(compact('NhanVien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        NhanVien::create($request->all());
        return  redirect()->route ('NhanVien.index')->with('success','Đã thêm thành công.');
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
    public function edit(NhanVien $NhanVien)

    {
        return view('admin.NhanVien.edit')->with(compact('NhanVien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NhanVien $NhanVien)
    {
        $NhanVien->update($request->only('ten_nhanvien','gioitinh', 'quequan', 'sdt' , 'email', 'capbac'));
        return redirect()->route('NhanVien.index')->with('success','Đã cập nhật 1 nhân viên .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(NhanVien $NhanVien)
    {
        //
    }
}

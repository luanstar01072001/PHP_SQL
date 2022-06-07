<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MyPham;
use App\Model\LoaiMyPham;
use App\Model\NhaCungCap;
use App\Models\nhacungcap as ModelsNhacungcap;
use DateTime;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class MyPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $MyPham= MyPham::orderBy('id')->get(); 
        return view('admin.MyPham.index',compact('MyPham'))->with('i');
         }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        $LoaiMyPham=LoaiMyPham ::select('id','TENLOAI')->get(); 
      $NhaCungCap=NhaCungCap ::select('id','ten_ncc')->get(); 

        $MyPham=MyPham::where('id')->orderBy('id','DESC')->get();
        return view('admin.MyPham.create')->with(compact('MyPham','LoaiMyPham','NhaCungCap'));
       }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, MyPham::RULES);
        $data = $request->all();
        if ($request->file('ANH_1') != null)
        {
            $file = $request->file('ANH_1');
            $file_name = Str::random(5) . '.' . $file->getClientOriginalExtension();
            $file_path = $file->storeAs('/upload', $file_name);
            $data['ANH_1'] = $file_path;
        }
        MyPham::create($data);
        return  redirect()->route ('MyPham.index')->with('success','Đã thêm thành công.');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( MyPham $MyPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MyPham $MyPham)
    {

        $NhaCungCap=NhaCungCap ::select('id','ten_ncc')->get();  
        $LoaiMyPham=LoaiMyPham ::select('id','TENLOAI')->get();  
        return view('admin.MyPham.edit')->with(compact('MyPham','LoaiMyPham','NhaCungCap'));
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,MyPham $MyPham)
    {

        $data = $request->only('TENMYPHAM','ANH_1','ten_ncc','TENLOAI','CHITIET_1','CHITIET_2','CHITIET_3','CHITIET_4','CHITIET_5','CHITIET_6','CHITIET_7','CHITIET_8','TTTH','GIAMYPHAM','GIAMYPHAMGIAM');
        if ($request->file('ANH_1') != null)
        {
            $file = $request->file('ANH_1');
            $file_name = Str::random(5) . '.' . $file->getClientOriginalExtension();
            $file_path = $file->storeAs('/upload', $file_name);
            $data['ANH_1'] = $file_path;
        }
        $MyPham->update($data);
        return redirect()->route('MyPham.index')->with('success','đã cập nhật 1 sản phẩm .');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyPham $MyPham)
    {
        $MyPham -> delete();
        return redirect()->route('MyPham.index')->with('success','xóa sản phẩm thành công');
      }
}

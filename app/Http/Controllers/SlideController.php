<?php

namespace App\Http\Controllers;
use App\Model\Slide;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $Slide= Slide::orderBy('id')->get();
            
            return view('admin.Slide.index',compact('Slide'))->with('i');
            }
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Slide=Slide::where('id')->get();
        return view('admin.Slide.create')->with(compact('Slide'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Slide::RULES);
        $data = $request->all();
        $file = $request->file('img_slide');
        if ($file && $file->isValid())
        {
            $file = $request->file('img_slide');
            // $file_name = Str::random(5) . '.' . $file->getClientOriginalExtension();
            $file_path = $file->store('/upload');
            $data['img_slide'] = $file_path;
        }
        Slide::create($data);
        return  redirect()->route ('Slide.index')->with('success','Đã thêm thành công.');

        // Slide::create($request->all());
        // return  redirect()->route ('Slide.index')->with('success','Đã thêm thành công.');
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
    public function edit(Slide $Slide)
    {
        return view('admin.Slide.edit')->with(compact('Slide'));
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
        $data = $request->only('ten_slide','img_slide');
        $file = $request->file('img_slide');
        if ($file && $file->isValid())
        {
            $file = $request->file('img-slide');
            $file_path = $file->store('/upload');
            $data['img_slide'] = $file_path;
        }
        $Slide = Slide::find($id);
        $Slide->update($data);
        return redirect()->route('Slide.index')->with('success','đã cập nhật 1 sản phẩm .');
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

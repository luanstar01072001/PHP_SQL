<?php

namespace App\Http\Controllers;
use App\Http\Controllers\view;
use App\Model\LoaiMyPham;
use App\Model\MyPham;
use App\Model\NhaCungCap;
use App\Model\Slide;
use Illuminate\Http\Request;

class TrangchuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanphambanchay=MyPham::orderBy('id','desc')->take(8)->where('id_LOAIMYPHAM', 13)->get();
        $taytrang=MyPham::orderBy('id','desc')->take(4)->where('id_LOAIMYPHAM', 2)->get();
        $suaruamat=MyPham::orderBy('id','desc')->take(4)->where('id_LOAIMYPHAM', 3)->get();
        $taytebaochet=MyPham::orderBy('id','desc')->take(4)->where('id_LOAIMYPHAM', 4)->get();
        $xitkhoang=MyPham::orderBy('id','desc')->take(4)->where('id_LOAIMYPHAM', 5)->get();
        $toner=MyPham::orderBy('id','desc')->take(4)->where('id_LOAIMYPHAM', 6)->get();
        $tinhchatduongda=MyPham::orderBy('id','desc')->take(4)->where('id_LOAIMYPHAM', 7)->get();
        $kemduonggiammun=MyPham::orderBy('id','desc')->take(4)->where('id_LOAIMYPHAM', 8)->get();
        $kemduong=MyPham::orderBy('id','desc')->take(4)->where('id_LOAIMYPHAM', 9)->get();
        $chongnang=MyPham::orderBy('id','desc')->take(4)->where('id_LOAIMYPHAM', 10)->get();
        $chongnangnangtone=MyPham::orderBy('id','desc')->take(4)->where('id_LOAIMYPHAM', 11)->get();
        $chamsoccothe=MyPham::orderBy('id','desc')->take(4)->where('id_LOAIMYPHAM', 12)->get();

        $slide=Slide::orderBy('id','desc')->take(5)->get();

        $LoaiMyPham=LoaiMyPham::all();
        $tatca=MyPham::all();
        return view("customer.trangchu",compact('tatca','sanphambanchay','taytrang','suaruamat','taytebaochet','xitkhoang','toner','tinhchatduongda','kemduonggiammun','kemduong','chongnang','chongnangnangtone','chamsoccothe','LoaiMyPham', 'slide'));
    }
    public function LoaiMyPham()
    {
        $LoaiMyPham=LoaiMyPham::all();

       return view("customer.LoaiMyPham",compact('LoaiMyPham'));
    }

    public function loaimpAPI()
    {
        $LoaiMyPham=LoaiMyPham::all();

       return $LoaiMyPham;
    }

    
    public function tatca($id)
    {
        
        $LoaiMyPham=LoaiMyPham::all();
        $tatca=MyPham::where('id_LOAIMYPHAM', $id)->orderBy('id','desc')->take(10)->get(); 
     
        return view("customer.tatca",compact('tatca','LoaiMyPham'));
    }

    public function sanphambanchay()
    {
        $sanphambanchay=MyPham::orderBy('id','desc')->take(8)->where('id_LOAIMYPHAM', 13)->get();
        return view("customer.sanphambanchay",compact('sanphambanchay'));
    }
    public function taytrang()
    {
        $taytrang=MyPham::orderBy('id','desc')->take(8)->where('id_LOAIMYPHAM', 2)->get();
        return view("customer.taytrang",compact('taytrang'));
    }  public function suaruamat()
    {
        $suaruamat=MyPham::orderBy('id','desc')->take(15)->where('id_LOAIMYPHAM', 3)->get();
        return view("customer.suaruamat",compact('suaruamat'));
    }  public function taytebaochet()
    {
        $taytebaochet=MyPham::orderBy('id','desc')->take(8)->where('id_LOAIMYPHAM', 4)->get();
        return view("customer.taytebaochet",compact('taytebaochet'));
    }  public function xitkhoang()
    {
        $xitkhoang=MyPham::orderBy('id','desc')->take(8)->where('id_LOAIMYPHAM', 5)->get();
        return view("customer.xitkhoang",compact('xitkhoang'));
    }  public function toner()
    {
        $toner=MyPham::orderBy('id','desc')->take(8)->where('id_LOAIMYPHAM', 6)->get();
        return view("customer.toner",compact('toner'));
    }  public function tinhchatduongda()
    {
        $tinhchatduongda=MyPham::orderBy('id','desc')->take(8)->where('id_LOAIMYPHAM', 7)->get();
        return view("customer.tinhchatduongda",compact('tinhchatduongda'));
    }  public function kemduonggiammun()
    {
        $kemduonggiammun=MyPham::orderBy('id','desc')->take(8)->where('id_LOAIMYPHAM', 8)->get();
        return view("customer.kemduonggiammun",compact('kemduonggiammun'));
    }  public function kemduong()
    {
        $kemduong=MyPham::orderBy('id','desc')->take(8)->where('id_LOAIMYPHAM', 9)->get();
        return view("customer.kemduong",compact('kemduong'));
    }  public function chongnang()
    {
        $chongnang=MyPham::orderBy('id','desc')->take(8)->where('id_LOAIMYPHAM', 10)->get();
        return view("customer.chongnang",compact('chongnang'));
    }
    public function chongnangnangtone()
    {
        $chongnangnangtone=MyPham::orderBy('id','desc')->take(8)->where('id_LOAIMYPHAM', 11)->get();
        return view("customer.chongnangnangtone",compact('chongnangnangtone'));
    }
    public function chamsoccothe()
    {
        $chamsoccothe=MyPham::orderBy('id','desc')->take(8)->where('id_LOAIMYPHAM', 12)->get();
        return view("customer.chamsoccothe",compact('chamsoccothe'));
    }

    public function xemchitiet(Request $request)
    {
    //    $sanphambanchay=MyPham::orderBy('id','desc')->take(8)->where('id_LOAIMYPHAM', 13)->get();

    //    $xem =MyPham::where('id',$request->id)->first();

    //    return view("customer.xemchitiet",compact('xem','sanphambanchay'));

       $LoaiMyPham = LoaiMyPham::all();
       $xem = MyPham::where('id', $request->id)->first();
       $id_LOAIMYPHAM = $xem->id_LOAIMYPHAM;
       $SPTT = MyPham::where('id_LOAIMYPHAM', $id_LOAIMYPHAM)->where('id','<>',$xem->id)->get();
       return view('customer.xemchitiet', compact('xem','LoaiMyPham','SPTT'));
    }
    public function search(Request $request)
    {  
        $LoaiMyPham=LoaiMyPham::all();
        $NhaCungCap=NhaCungCap::all();
        $keywords=$request->Search;
        $search=MyPham::where('TENMYPHAM','like','%'.$keywords.'%')->get();
        return view("customer.search",with(compact('search','LoaiMyPham','NhaCungCap')));
    }
    public function about(Request $request)
    {
        return view("customer.about");
    }

    public function lienhe(Request $request)
    {
        return view("customer.lienhe");
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

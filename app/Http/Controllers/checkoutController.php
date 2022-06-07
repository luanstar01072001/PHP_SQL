<?php
namespace App\Http\Controllers;

use App\Model\KhachHang;
use App\Model\MyPham;
use App\Model\LoaiMyPham;

use App\Model\HoaDonBan;
use App\Model\ChiTietHoaDonBan;
use App\Model\DonHang;
use App\Model\GioHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class checkoutController extends Controller
{
    public function index()
    {
        $LoaiMyPham = LoaiMyPham::all();
       return view("customer.dathangthanhcong", compact('LoaiMyPham'));

    //     $loai_sp = loai_sp::all();
       // return view('trangchu.thanhtoan', compact('loai_sp'));
       //return view("customer.login");
    }
    // public function add_khachhang(Request $request)
    // {
    //     //khachs hangf
    //     $data=array();
    //     $data['ten_kh']=$request->ten_kh;
    //     $data['email']=$request->email;
    //     $data['sdt']=$request->sdt;
    //     $data['diachi']=$request->diachi;
        
    //     $id=khachhang::insertGetId($data);
    //     //Session()
    //     session()->put('id',$id);
    //     session()->put('ten_kh',$request->ten_kh);
        
    //     return  redirect('/checkout');
    // }
    public function checkout(){
        return view("customer.checkout");
    }
    public function save_checkout(Request $request)
    {
        $data=array();
        $data['sptenkh']=$request->sptenkh;
        $data['spemail']=$request->spemail;
        $data['spphone']=$request->spphone;
        $data['spdiachi']=$request->spdiachi;
        // $spid=shipping::insertGetId($data);
        // Session::put('spid',$spid);     
        // dd($data);

        $content=Cart::content();

        $code = Str::random(20);

        foreach($content as $item)
        {
            DonHang::create([
                'code' => $code,
                'kh_email' => $data['spemail'],
                'kh_ten' => $data['sptenkh'],
                'kh_sdt' => $data['spphone'],
                'kh_dia_chi' => $data['spdiachi'],
                'ten_san_pham' => $item->name,
                'so_luong' => $item->qty,
                'gia' => $item->price
            ]);
        }

        Cart::destroy();

        return  redirect('/LoaiMyPham');
    }

    public function order_place(Request $request)
    {

 //khachs hangf
 $data=array();
 $data['ten_kh']=$request->ten_kh;
 $data['email']=$request->email;
 $data['sdt']=$request->sdt;
 $data['diachi']=$request->diachi;
 
 $id=khachhang::insertGetId($data);
 //Session()
 session()->put('id',$id);
 session()->put('ten_kh',$request->ten_kh);

        //get payment method
        // $data=array();
        // $data['payment_method']=$request->payment_option;
        // $data['payment_status']='Đang chờ xử lý';
        // $payment_id =payment::insertGetId($data);

        //insert order
        $order_data=array();
        $order_data['id_kh'] = Session::get('id');
        $order_data['tong_tien'] = Cart::subtotal();
        $order_data['status'] = 'Đang chờ xử lý';
        $order_id = HoaDonBan::insertGetId($order_data);

        //insert order details
        $content = Cart::content();
        foreach($content as $v_content){
            $order_d_data['id_hđb'] = $order_id;
            $order_d_data['	id_sp'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;
            $order_d_data['product_price'] = $v_content->price;
            $order_d_data['sl'] = $v_content->qty;
            ChiTietHoaDonBan::insert($order_d_data);

            
        }
        // Cart::destroy();
        return Redirect('/trangchu');
    }
    public function order_sussec()
    {
        $LoaiMyPham = LoaiMyPham::all();
        return view("customer.dathangthanhcong", compact('LoaiMyPham'));
        // if($data['payment_method']==1){
        //     Cart::destroy();          
        //     return view("customer.dathangthanhcong");
        // }
        // elseif($data['payment_method']==2){
        //     Cart::destroy();          
        //     return view("customer.dathangthanhcong");
        // }
    
    }
   
}

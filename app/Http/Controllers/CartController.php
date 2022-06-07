<?php

namespace App\Http\Controllers;
//use Session;
use App\Model\MyPham;
use App\Model\LoaiMyPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;

session();
session_start();
class CartController extends Controller
{
    public function save_cart(Request $request)
    {
         $productId = $request->productid_hidden;
         $quantity= $request->qty;
         $product_info= MyPham::where('id',$productId)->first();
        // return view("customer.showCart");
         $data['id'] = $product_info->id;
         $data['qty'] = $quantity;
         $data['name'] = $product_info->TENMYPHAM;
         $data['price'] = $product_info->GIAMYPHAM;
         $data['weight'] = $product_info->GIAMYPHAM;
         $data['options']['image'] = $product_info->ANH_1;
         Cart::add($data);
        return Redirect::to('/show_cart');
    }
    public function show_cart(){
     
        
        return view('customer.showCart');
    }
    public function delete_cart($rowId){
        Cart::update($rowId,0);//xet gtri bang 0
        return Redirect('/show_cart');
    }
    public function update_quantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId,$qty);
        return Redirect('/show_cart');
       // echo Session::get('customer_id');
    }
}

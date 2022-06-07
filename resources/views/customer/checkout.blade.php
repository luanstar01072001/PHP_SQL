@extends('layout.customer')
@section('main')
<section class="bg0 p-t-23 p-b-140">
    <div class="breadcrumb-area">
    <!-- Top Breadcrumb Area -->
 

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div id="content">

    <div class="table-responsive">
    <!-- Shop Products Table -->
    <table class="table table-bordered table-hover" cellspacing="0">
        <thead>
            @php
                            use Gloudemans\Shoppingcart\Facades\Cart;

            $content=Cart::content();
            $stt=1;
            @endphp
    
            <thead>
                <tr class="L1">
                    <th class="L2">STT</th>
                    <th class="L2">Hình ảnh</th>
                    <th class="L2">Tên sản phẩm</th>
                    <th class="L2">Số lượng</th>
                    <th class="L2">Giá</th>

                    <td class="total">Tổng</td>
                    <th class="L2">Xóa</th>
                </tr>
            </thead>
        <tbody>
        
            @foreach($content as $v_content)

            <tr>
                <td>{{$stt++}}</td>
                    <td class="text-center"><img class="L3" src="/{{$v_content->options->image}}" width="100" height="100" /> </td>
                    <td>{{$v_content->name}} </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <form action="{{URL('/update_quantity')}}" method="get">
                                @csrf
                                <input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}">
                                <input type="hidden"  min="1" step="1" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                                <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
                            </form>
                        </div>
                    </td>
                    <td width="180px;"> {{number_format($v_content ->price)}} VND </td>
                    <td width="150px;"><?php
                        $subtotal = $v_content->price * $v_content->qty;
                        echo number_format($subtotal) . ' ' . 'VND';
                        ?> </td>

                        <td>
                            <a   class="btn btn-danger" href="{{URL('/delete-cart/'.$v_content->rowId)}}">Xóa</a>
                        </td>
                </tr>
            @endforeach

        </tbody>
   
 
    </table>
    {{-- <a href="{{url('/trangchu')}}"><button class="btn btn-info">Tiếp tục mua hàng</button></a> --}}
    <?php
    $id = session()->get('id');
    if ($id != null) {
    ?>

        <button class="btn btn-success"><a style="color: #f5f5f5;" href="{{url('/checkout')}}"> Thanh toán </a></button>

    <?php
    } else {
    ?>

        {{-- <button class="btn btn-success"><a style="color: #f5f5f5;" href="{{url('/dangnhap')}}"> Thanh toán </a></button> --}}

    <?php
    }
    ?> 
    <div class="total_area">

        <div>
            <p class="L4">Thành tiền :<span>{{Cart::subtotal()}} VND</p>
        </div>
        <!--<a  class="btn btn-primary" href="{{url('/login_checkout')}}">Mua Hàng</a>-->
       
    </div>
    <!-- #content -->
</div> <!-- .container -->
</section>


    <!-- //product left -->

     <!-- Cart Totals -->
     <div class="col-12 col-lg-6" >
        <div class="cart-totals-area mt-70">
            <h3 class="title--" style="text-align: center">Thông Tin Đặt Hàng</h3> <br>
            
            <div class="shipping d-flex justify-content-between">
                <div class="shipping-address" style="display: block;
                margin-left: auto;
                margin-right: auto;">
                <form action="{{url('/luu_checkout')}}" method="get" >
                    {{-- $data=array();
                    $data['ten_kh']=$request->ten_kh;
                    $data['email']=$request->email;
                    $data['sdt']=$request->sdt;
                    $data['diachi']=$request->diachi; --}}
                        <input type="text" name="spemail" id="shipping-text" style="font-size: 16px" name="spemail" placeholder="Email"> <br>
                        <input type="text" name="sptenkh" id="shipping-zip" style="font-size: 16px"  name="sptenkh" placeholder="Tên khách hàng"> <br>
                        <input type="text" name="spphone" id="shipping-zip" style="font-size: 16px" name="spphone"  placeholder="Số điện thoại"> <br>

                        <select class="custom-select" style="font-size: 16px" name="spdiachi">
                            <option selected>Thành Phố</option>
                            <option value="An Giang">An Giang
                                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                <option value="Bắc Giang">Bắc Giang
                                <option value="Bắc Kạn">Bắc Kạn
                                <option value="Bạc Liêu">Bạc Liêu
                                <option value="Bắc Ninh">Bắc Ninh
                                <option value="Bến Tre">Bến Tre
                                <option value="Bình Định">Bình Định
                                <option value="Bình Dương">Bình Dương
                                <option value="Bình Phước">Bình Phước
                                <option value="Bình Thuận">Bình Thuận
                                <option value="Bình Thuận">Bình Thuận
                                <option value="Cà Mau">Cà Mau
                                <option value="Cao Bằng">Cao Bằng
                                <option value="Đắk Lắk">Đắk Lắk
                                <option value="Đắk Nông">Đắk Nông
                                <option value="Điện Biên">Điện Biên
                                <option value="Đồng Nai">Đồng Nai
                                <option value="Đồng Tháp">Đồng Tháp
                                <option value="Đồng Tháp">Đồng Tháp
                                <option value="Gia Lai">Gia Lai
                                <option value="Hà Giang">Hà Giang
                                <option value="Hà Nam">Hà Nam
                                <option value="Hà Tĩnh">Hà Tĩnh
                                <option value="Hải Dương">Hải Dương
                                <option value="Hậu Giang">Hậu Giang
                                <option value="Hòa Bình">Hòa Bình
                                <option value="Hưng Yên">Hưng Yên
                                <option value="Khánh Hòa">Khánh Hòa
                                <option value="Kiên Giang">Kiên Giang
                                <option value="Kon Tum">Kon Tum
                                <option value="Lai Châu">Lai Châu
                                <option value="Lâm Đồng">Lâm Đồng
                                <option value="Lạng Sơn">Lạng Sơn
                                <option value="Lào Cai">Lào Cai
                                <option value="Long An">Long An
                                <option value="Nam Định">Nam Định
                                <option value="Nghệ An">Nghệ An
                                <option value="Ninh Bình">Ninh Bình
                                <option value="Ninh Thuận">Ninh Thuận
                                <option value="Phú Thọ">Phú Thọ
                                <option value="Quảng Bình">Quảng Bình
                                <option value="Quảng Bình">Quảng Bình
                                <option value="Quảng Ngãi">Quảng Ngãi
                                <option value="Quảng Ninh">Quảng Ninh
                                <option value="Quảng Trị">Quảng Trị
                                <option value="Sóc Trăng">Sóc Trăng
                                <option value="Sơn La">Sơn La
                                <option value="Tây Ninh">Tây Ninh
                                <option value="Thái Bình">Thái Bình
                                <option value="Thái Nguyên">Thái Nguyên
                                <option value="Thanh Hóa">Thanh Hóa
                                <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                <option value="Tiền Giang">Tiền Giang
                                <option value="Trà Vinh">Trà Vinh
                                <option value="Tuyên Quang">Tuyên Quang
                                <option value="Vĩnh Long">Vĩnh Long
                                <option value="Vĩnh Phúc">Vĩnh Phúc
                                <option value="Yên Bái">Yên Bái
                                <option value="Phú Yên">Phú Yên
                                <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                <option value="Tp.Hà Nội">Tp.Hà Nội
                                <option value="TP  HCM">TP HCM
                          </select> <br> <br>
                        <button class="L5" type="submit">Đặt hàng</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <!-- product right -->
</div>
<br>
@stop
<style>
    section.bg0.p-t-23.p-b-140 {
    margin-top: 3cm;
    }
   
   
    td, th 
    { 
        font-family: 'Avenir Next', 'Segoe UI', 'Lucida Grande', sans-serif;
color: black;
font-size: 113%;
    font-weight: 500;
        padding: 8px; padding: .5rem;
}




.L1{

    color: white;
    font-size: 113%;
    font-weight: 500;
    background-color: #509cc9;

}
.L2, .total{
    color: white;
    font-size: 113%;
    font-weight: 500;
    
}
a.btn.btn-danger{
    background-color: #509cc9;
    outline: none;
    border: none;
    border-radius: calc(var(--layer-corner-radius) * 1px);
  
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4;

}
input.btn.btn-default.btn-sm{
    background-color: #509cc9;
    outline: none;
    border: none;
    color: white;
    border-radius: calc(var(--layer-corner-radius) * 1px);
  
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4;
    margin-top: 14px;
    width: 230px;
}
input.cart_quantity_input {

    color: black;
    font-weight: 500;
    border-radius: calc(var(--layer-corner-radius) * 1px);
    background: var(--fill-color);
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4;
    padding-left: 10px
}
table.table.table-bordered.table-hover {
    border-radius: calc(var(--layer-corner-radius) * 1px);
    background: var(--fill-color);
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4;
    margin-bottom:1cm;
}
.L3{
    border-radius: calc(var(--layer-corner-radius) * 1px);
    background: var(--fill-color);
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4;
}
button.btn.btn-info{
    background-color: #509cc9;
    outline: none;
    border: none;
    border-radius: calc(var(--layer-corner-radius) * 1px);
  
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4
}
button.btn.btn-success{
    background-color: #509cc9;
    
    outline: none;
    border: none;
    border-radius: calc(var(--layer-corner-radius) * 1px);
  
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4
}
.L4{
    color: #d0021c;
    font-size: 18px;
    font-size: 174%;
    margin-top: 10px;
    font-weight: 600;
    margin-bottom: 0.5cm;
}
.cart-totals-area.mt-70 {
 
    margin-top: -2cm;
    /* width: 25cm; */
    padding: 1cm 1cm 1cm 1cm;
    background-color: #509cc9;
    
    outline: none;
    border: none;
    border-radius: calc(var(--layer-corner-radius) * 1px);
  
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4
    margin-top: -2cm;
    /* width: 25cm; */

    width: 31.35cm;
    margin-left: 4cm;
}
h3.title--{
    color: white;

}

input#shipping-text {
    padding: 10px;
    outline: none;
    border: none;
    border-radius: calc(var(--layer-corner-radius) * 1px);
  
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4;
    text-align: center;
    width: 29cm;
}
input#shipping-zip{
    padding: 10px;
    outline: none;
    border: none;
    border-radius: calc(var(--layer-corner-radius) * 1px);
  
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4;
    text-align: center;
    width: 29cm;
}
select.custom-select{
    /* padding: 10px; */
    outline: none;
    border: none;
    border-radius: calc(var(--layer-corner-radius) * 1px);
  
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4;
    text-align: center;
    width: 29cm;

}
.L5{
    padding: 10px;
    outline: none;
    border: none;
    border-radius: calc(var(--layer-corner-radius) * 1px);
    color: white;
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4;
    text-align: center;
    width: 29cm;
}
</style>
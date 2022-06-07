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
                        <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
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
    
    <div class="total_area">

        <div>
            <p class="L4">Thành tiền :{{Cart::subtotal()}}VND</p>
        </div>
        <!--<a  class="btn btn-primary" href="{{url('/login_checkout')}}">Mua Hàng</a>-->
       
    </div>
    <!-- #content -->
    <a href="{{url('/lnstore')}}"><button class="btn btn-info">Tiếp tục mua hàng</button></a>
    <?php
    $id = session()->get('id');
    if ($id != null) {
    ?>

        <button class="btn btn-success"><a style="color: #f5f5f5;" href="{{url('/checkout')}}"> Thanh toán </a></button>

    <?php
    } else {
    ?>

        <button class="btn btn-success"><a style="color: #f5f5f5;" href="{{url('/checkout')}}"> Thanh toán </a></button>

    <?php
    }
    ?> 
</div> <!-- .container -->
</section>


  @stop()
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
</style>
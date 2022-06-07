@extends('layout.customer')
@section('main')
	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
            
			<div class="slick1">
                @foreach($slide as $item )
				<div class="item-slick1" style="background-image: url(/{{$item->img_slide}});" >
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<!-- <span class="ltext-101 cl2 respon2">
									Women Collection 2018
								</span> -->
							</div>
	
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<!-- <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									NEW SEASON
								</h2> -->
							</div>
	
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<!-- <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a> -->
							</div>
						</div>
					</div>
				</div>
                @endforeach
			</div>
            
		</div>
	</section>
<!-- Banner -->
<div class="sec-banner bg0 p-t-80 p-b-50">
    <h3 class="ltext-103 cl5" style="margin-top: -0.5cm; margin-bottom: 1cm; margin-left: 173px;">
        LIỆU TRÌNH CHĂM SÓC DA
    </h3>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="trangchu/images/lt1.png" alt="IMG-BANNER">

                    <a href="product.html"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Da
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                dầu mụn, nhạy cảm
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Tìm Hiểu
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="trangchu/images/lt2.png" alt="IMG-BANNER">

                    <a href="product.html"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Da
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                khô, thường
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Tìm Hiểu
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="trangchu/images/lt3.png" alt="IMG-BANNER">

                    <a href="product.html"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Da
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                kích ứng
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Tìm Hiểu
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="bna">
    <img class="A1" src="trangchu/images/bn6.png" alt="">
    <img class="A2" src="trangchu/images/bn7.png" alt="">
</section>
<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                SẢN PHẨM BÁN CHẠY
            </h3>
            <img class="ABN" src="trangchu/images/bn/1.png" alt="">
        </div>

        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                    Tìm hiểu thêm về các sản phẩm bán chạy trong LN*Store
                </button>

                
                
            </div>

            <div class="flex-w flex-c-m m-tb-10">
                <div
                    class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                    <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                    <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Bộ lọc
                </div>

                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Tìm kiếm
                </div>
            </div>

            <!-- Search product -->
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                {{-- <div class="bor8 dis-flex p-l-15"> --}}
                    <form action="{{route('search')}}" method="get" class="bor8 dis-flex p-l-15">
                    <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="search" name="Search" id="search" 
                        placeholder="Tìm kiếm">
                    <input>
                    </form>
                {{-- </div> --}}
            </div>

            <!-- Filter -->
            <div class="dis-none panel-filter w-full p-t-10">
                <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                    <div class="filter-col1 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Sort By
                        </div>

                        <ul>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Default
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Popularity
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Average rating
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    Newness
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Price: Low to High
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Price: High to Low
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row isotope-grid">
        
            @foreach($sanphambanchay as $item )

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/{{$item->ANH_1}}"
                            alt="IMG-PRODUCT">

                        {{-- <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Thêm Vào Giỏ Hàng
                        </a> --}}
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('xemchitiet',$item->id)}}" class="stext-L cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$item->TENMYPHAM}}     
                            </a>

                            <span class="stext-L cl3">
                                {{number_format($item->GIAMYPHAM)}}đ    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <S> {{number_format($item->GIAMYPHAMGIAM)}}đ </S>  
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="trangchu/images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="trangchu/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                    <form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
                        @csrf
                            <div class="quantity" style="display: block;margin-left: auto;margin-right: auto;margin-top: -10px;">
                                <input type="hidden" style="display: none;" name="productid_hidden" value="{{$item->id}} " />
                                    <input type="number" style="display: none;" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">
                                <br>

                                <button type="submit" name="submit" style="display:block;line-height: normal;" class="btn alazea-btn ml-15">Thêm Vào Giỏ Hàng</button>

                            </div>

                    </form>
                </div>
            </div>
            @endforeach


        </div>
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('sanphambanchay')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem Thêm
            </a>
        </div>
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                NƯỚC TẨY TRANG
            </h3>
            <img class="ABN" src="trangchu/images/bn/2.png" alt="">
        </div>
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
            {{-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                Nước Tẩy Trang La Roche-Posay Micellar Water Ultra Sensitive Skin đến từ thương hiệu dược mỹ phẩm La Roche-Posay của Pháp là dòng sản phẩm tẩy trang dành cho da mặt, vùng mắt và môi, ứng dụng công nghệ Glyco Micellar giúp làm sạch sâu lớp trang điểm và bụi bẩn, bã nhờn trên da vượt trội mà vẫn êm dịu, không gây căng rát hay kích ứng da; đồng thời cung cấp độ ẩm, mang đến làn da mềm mại & thoáng nhẹ sau khi sử dụng.


            </button> --}}

            
            
        </div>        
        <div class="row isotope-grid">
        
            @foreach($taytrang as $item )

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/{{$item->ANH_1}}"
                            alt="IMG-PRODUCT">

                        {{-- <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Thêm Vào Giỏ Hàng
                        </a> --}}
                       
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('xemchitiet',$item->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$item->TENMYPHAM}}                            
                            </a>

                            <span class="stext-105 cl3">
                                {{number_format($item->GIAMYPHAM)}}đ   <s>{{number_format($item->GIAMYPHAMGIAM)}}đ </s>
                            </span>
                        </div>
                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="trangchu/images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="trangchu/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                        
                    </div>
                    <form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
                        @csrf
                            <div class="quantity" style="display: block;margin-left: auto;margin-right: auto;margin-top: -10px;">
                                <input type="hidden" style="display: none;" name="productid_hidden" value="{{$item->id}} " />
                                    <input type="number" style="display: none;" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">
                                <br>

                                <button type="submit" name="submit" style="display:block;line-height: normal;" class="btn alazea-btn ml-15">Thêm Vào Giỏ Hàng</button>

                            </div>

                    </form>
                </div>
            </div>
            @endforeach

        </div>
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('taytrang')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem Thêm
            </a>
        </div>



        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                SỬA RỬA MẶT
            </h3>
            <img class="ABN" src="trangchu/images/bn/3.png" alt="">
        </div>
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
            {{-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp, với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.
            </button> --}}

            
            
        </div>        
        <div class="row isotope-grid">
        
            @foreach($suaruamat as $item )

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/{{$item->ANH_1}}"
                            alt="IMG-PRODUCT">

                        {{-- <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Thêm Vào Giỏ Hàng
                        </a> --}}
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('xemchitiet',$item->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$item->TENMYPHAM}}                            </a>

                            <span class="stext-105 cl3">
                                {{number_format($item->GIAMYPHAM)}}đ   <s>{{number_format($item->GIAMYPHAMGIAM)}}đ </s>
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="trangchu/images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                src="trangchu/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                    <form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
                        @csrf
                            <div class="quantity" style="display: block;margin-left: auto;margin-right: auto;margin-top: -10px;">
                                <input type="hidden" style="display: none;" name="productid_hidden" value="{{$item->id}} " />
                                    <input type="number" style="display: none;" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">
                                <br>

                                <button type="submit" name="submit" style="display:block;line-height: normal;" class="btn alazea-btn ml-15">Thêm Vào Giỏ Hàng</button>

                            </div>

                    </form>
                </div>
            </div>
            
            @endforeach

        </div>

        <!-- Xem Thêm -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('suaruamat')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem Thêm
            </a>
        </div>

        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                TẨY TẾ BÀO CHẾT
            </h3>
            <img class="ABN" src="trangchu/images/bn/4.png" alt="">
        </div>
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
            {{-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp, với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.
            </button> --}}

            
            
        </div>        
        <div class="row isotope-grid">
        
            @foreach($taytebaochet as $item )

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/{{$item->ANH_1}}"
                            alt="IMG-PRODUCT">

                        {{-- <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Thêm Vào Giỏ Hàng
                        </a> --}}
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('xemchitiet',$item->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$item->TENMYPHAM}}                            </a>

                            <span class="stext-105 cl3">
                                {{number_format($item->GIAMYPHAM)}}đ   <s>{{number_format($item->GIAMYPHAMGIAM)}}đ </s>
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="trangchu/images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                src="trangchu/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                    <form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
                        @csrf
                            <div class="quantity" style="display: block;margin-left: auto;margin-right: auto;margin-top: -10px;">
                                <input type="hidden" style="display: none;" name="productid_hidden" value="{{$item->id}} " />
                                    <input type="number" style="display: none;" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">
                                <br>

                                <button type="submit" name="submit" style="display:block;line-height: normal;" class="btn alazea-btn ml-15">Thêm Vào Giỏ Hàng</button>

                            </div>

                    </form>
                </div>
            </div>
            
            @endforeach

        </div>

        <!-- Xem Thêm -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('taytebaochet')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem Thêm
            </a>
        </div>


        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                XỊT KHOÁNG
            </h3>
            <img class="ABN" src="trangchu/images/bn/12.png" alt="">
        </div>
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
            {{-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp, với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.
            </button> --}}

            
            
        </div>        
        <div class="row isotope-grid">
        
            @foreach($xitkhoang as $item )

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/{{$item->ANH_1}}"
                            alt="IMG-PRODUCT">

                        {{-- <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Thêm Vào Giỏ Hàng
                        </a> --}}
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('xemchitiet',$item->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$item->TENMYPHAM}}                            </a>

                            <span class="stext-105 cl3">
                                {{number_format($item->GIAMYPHAM)}}đ   <s>{{number_format($item->GIAMYPHAMGIAM)}}đ </s>
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="trangchu/images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                src="trangchu/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                    <form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
                        @csrf
                            <div class="quantity" style="display: block;margin-left: auto;margin-right: auto;margin-top: -10px;">
                                <input type="hidden" style="display: none;" name="productid_hidden" value="{{$item->id}} " />
                                    <input type="number" style="display: none;" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">
                                <br>

                                <button type="submit" name="submit" style="display:block;line-height: normal;" class="btn alazea-btn ml-15">Thêm Vào Giỏ Hàng</button>

                            </div>

                    </form>
                </div>
            </div>
            
            @endforeach

        </div>

        <!-- Xem Thêm -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('xitkhoang')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem Thêm
            </a>
        </div>


        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
               TONER - NƯỚC CÂN BẰNG
            </h3>
            <img class="ABN" src="trangchu/images/bn/5.png" alt="">
        </div>
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
            {{-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp, với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.
            </button> --}}

            
            
        </div>        
        <div class="row isotope-grid">
        
            @foreach($toner as $item )

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/{{$item->ANH_1}}"
                            alt="IMG-PRODUCT">

                        {{-- <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Thêm Vào Giỏ Hàng
                        </a> --}}
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('xemchitiet',$item->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$item->TENMYPHAM}}                            
                            </a>

                            <span class="stext-105 cl3">
                                {{number_format($item->GIAMYPHAM)}}đ   <s>{{number_format($item->GIAMYPHAMGIAM)}}đ </s>
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="trangchu/images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                src="trangchu/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                    <form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
                        @csrf
                            <div class="quantity" style="display: block;margin-left: auto;margin-right: auto;margin-top: -10px;">
                                <input type="hidden" style="display: none;" name="productid_hidden" value="{{$item->id}} " />
                                    <input type="number" style="display: none;" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">
                                <br>

                                <button type="submit" name="submit" style="display:block;line-height: normal;" class="btn alazea-btn ml-15">Thêm Vào Giỏ Hàng</button>

                            </div>

                    </form>
                </div>
            </div>
            
            @endforeach

        </div>

        <!-- Xem Thêm -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('toner')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem Thêm
            </a>
        </div>


        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
               TINH CHẤT DƯỠNG DA
            </h3>
            <img class="ABN" src="trangchu/images/bn/6.png" alt="">
        </div>
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
            {{-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp, với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.
            </button> --}}

            
            
        </div>        
        <div class="row isotope-grid">
        
            @foreach($tinhchatduongda as $item )

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/{{$item->ANH_1}}"
                            alt="IMG-PRODUCT">

                        {{-- <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Thêm Vào Giỏ Hàng
                        </a> --}}
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('xemchitiet',$item->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$item->TENMYPHAM}}                            
                            </a>

                            <span class="stext-105L cl3">
                                {{number_format($item->GIAMYPHAM)}}đ   <s>{{number_format($item->GIAMYPHAMGIAM)}}đ </s>
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="trangchu/images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                src="trangchu/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                    <form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
                        @csrf
                            <div class="quantity" style="display: block;margin-left: auto;margin-right: auto;margin-top: -10px;">
                                <input type="hidden" style="display: none;" name="productid_hidden" value="{{$item->id}} " />
                                    <input type="number" style="display: none;" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">
                                <br>

                                <button type="submit" name="submit" style="display:block;line-height: normal;" class="btn alazea-btn ml-15">Thêm Vào Giỏ Hàng</button>

                            </div>

                    </form>
                </div>
            </div>
            
            @endforeach

        </div>

        <!-- Xem Thêm -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('tinhchatduongda')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem Thêm
            </a>
        </div>


        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
               KEM DƯỠNG GIẢM MỤN
            </h3>
            <img class="ABN" src="trangchu/images/bn/7.png" alt="">
        </div>
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
            {{-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp, với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.
            </button> --}}

            
            
        </div>        
        <div class="row isotope-grid">
        
            @foreach($kemduonggiammun as $item )

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/{{$item->ANH_1}}"
                            alt="IMG-PRODUCT">

                        {{-- <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Thêm Vào Giỏ Hàng
                        </a> --}}
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('xemchitiet',$item->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$item->TENMYPHAM}}                            
                            </a>

                            <span class="stext-105 cl3">
                                {{number_format($item->GIAMYPHAM)}}đ   <s>{{number_format($item->GIAMYPHAMGIAM)}}đ </s>
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="trangchu/images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                src="trangchu/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                    <form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
                        @csrf
                            <div class="quantity" style="display: block;margin-left: auto;margin-right: auto;margin-top: -10px;">
                                <input type="hidden" style="display: none;" name="productid_hidden" value="{{$item->id}} " />
                                    <input type="number" style="display: none;" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">
                                <br>

                                <button type="submit" name="submit" style="display:block;line-height: normal;" class="btn alazea-btn ml-15">Thêm Vào Giỏ Hàng</button>

                            </div>

                    </form>
                </div>
            </div>
            
            @endforeach

        </div>

        <!-- Xem Thêm -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('kemduonggiammun')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem Thêm
            </a>
        </div>


        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
               KEM DƯỠNG
            </h3>
            <img class="ABN" src="trangchu/images/bn/8.png" alt="">
        </div>
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
            {{-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp, với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.
            </button> --}}

            
            
        </div>        
        <div class="row isotope-grid">
        
            @foreach($kemduong as $item )

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/{{$item->ANH_1}}"
                            alt="IMG-PRODUCT">

                        {{-- <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Thêm Vào Giỏ Hàng
                        </a> --}}
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('xemchitiet',$item->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$item->TENMYPHAM}}                            
                            </a>

                            <span class="stext-105 cl3">
                                {{number_format($item->GIAMYPHAM)}}đ   <s>{{number_format($item->GIAMYPHAMGIAM)}}đ </s>
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="trangchu/images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                src="trangchu/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                    <form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
                        @csrf
                            <div class="quantity" style="display: block;margin-left: auto;margin-right: auto;margin-top: -10px;">
                                <input type="hidden" style="display: none;" name="productid_hidden" value="{{$item->id}} " />
                                    <input type="number" style="display: none;" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">
                                <br>

                                <button type="submit" name="submit" style="display:block;line-height: normal;" class="btn alazea-btn ml-15">Thêm Vào Giỏ Hàng</button>

                            </div>

                    </form>
                </div>
            </div>
            
            @endforeach

        </div>

        <!-- Xem Thêm -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('kemduong')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem Thêm
            </a>
        </div>


        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
               CHỐNG NẮNG
            </h3>
            <img class="ABN" src="trangchu/images/bn/9.png" alt="">
        </div>
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
            {{-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp, với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.
            </button> --}}

            
            
        </div>        
        <div class="row isotope-grid">
        
            @foreach($chongnang as $item )

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/{{$item->ANH_1}}"
                            alt="IMG-PRODUCT">

                        {{-- <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Thêm Vào Giỏ Hàng
                        </a> --}}
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('xemchitiet',$item->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$item->TENMYPHAM}}                            
                            </a>

                            <span class="stext-105 cl3">
                                {{number_format($item->GIAMYPHAM)}}đ   <s>{{number_format($item->GIAMYPHAMGIAM)}}đ </s>
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="trangchu/images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                src="trangchu/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                    <form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
                        @csrf
                            <div class="quantity" style="display: block;margin-left: auto;margin-right: auto;margin-top: -10px;">
                                <input type="hidden" style="display: none;" name="productid_hidden" value="{{$item->id}} " />
                                    <input type="number" style="display: none;" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">
                                <br>

                                <button type="submit" name="submit" style="display:block;line-height: normal;" class="btn alazea-btn ml-15">Thêm Vào Giỏ Hàng</button>

                            </div>

                    </form>
                </div>
            </div>
            
            @endforeach

        </div>

        <!-- Xem Thêm -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('chongnang')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem Thêm
            </a>
        </div>


        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
               CHỐNG NẮNG NÂNG TONE
            </h3>
            <img class="ABN" src="trangchu/images/bn/10.png" alt="">
        </div>
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
            {{-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp, với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.
            </button> --}}

            
            
        </div>        
        <div class="row isotope-grid">
        
            @foreach($chongnangnangtone as $item )

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/{{$item->ANH_1}}"
                            alt="IMG-PRODUCT">

                        {{-- <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Thêm Vào Giỏ Hàng
                        </a> --}}
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('xemchitiet',$item->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$item->TENMYPHAM}}                            
                            </a>

                            <span class="stext-105 cl3">
                                {{number_format($item->GIAMYPHAM)}}đ   <s>{{number_format($item->GIAMYPHAMGIAM)}}đ </s>
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="trangchu/images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                src="trangchu/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                    <form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
                        @csrf
                            <div class="quantity" style="display: block;margin-left: auto;margin-right: auto;margin-top: -10px;">
                                <input type="hidden" style="display: none;" name="productid_hidden" value="{{$item->id}} " />
                                    <input type="number" style="display: none;" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">
                                <br>

                                <button type="submit" name="submit" style="display:block;line-height: normal;" class="btn alazea-btn ml-15">Thêm Vào Giỏ Hàng</button>

                            </div>

                    </form>
                </div>
            </div>
            
            @endforeach

        </div>

        <!-- Xem Thêm -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('chongnangnangtone')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem Thêm
            </a>
        </div>

        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
               CHĂM SÓC CƠ THỂ
            </h3>
            <img class="ABN" src="trangchu/images/bn/11.png" alt="">
        </div>
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
            {{-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp, với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.
            </button> --}}

            
            
        </div>
        <div class="row isotope-grid">
        
            @foreach($chamsoccothe as $item )

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/{{$item->ANH_1}}"
                            alt="IMG-PRODUCT">
                            {{-- <form action="{{url('/savecart')}}" method="post">
                                @csrf
            
                                <a href="" style="line-height: 46px; width: 50px; height: 50px; background: white;" class="icon-cart block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    <button type="submit" name="submit" style="border: 1px solid #bac34e; width: 100%; height: 100%; border: none">
                                        <input type="hidden" name="productid_hidden" value="{{$item->id}}" />
                                        <input type="hidden" data-toggle="collapse" name="qty" min="1" value="1" />
                                        <i class="pe-7s-shuffle"></i>
                                    </button>
            
            
                                </a>
            
                            </form> --}}
                        {{-- <a href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Thêm Vào Giỏ Hàng
                        </a> --}}
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('xemchitiet',$item->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$item->TENMYPHAM}}                            
                            </a>

                            <span class="stext-105 cl3">
                                {{number_format($item->GIAMYPHAM)}}đ   <s>{{number_format($item->GIAMYPHAMGIAM)}}đ </s>
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="trangchu/images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                src="trangchu/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                    <form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
                        @csrf
                            <div class="quantity" style="display: block;margin-left: auto;margin-right: auto;margin-top: -10px;">
                                <input type="hidden" style="display: none;" name="productid_hidden" value="{{$item->id}} " />
                                    <input type="number" style="display: none;" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">
                                <br>

                                <button type="submit" name="submit" style="display:block;line-height: normal;" class="btn alazea-btn ml-15">Thêm Vào Giỏ Hàng</button>

                            </div>

                    </form>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Xem Thêm -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('chamsoccothe')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem Thêm
            </a>
        </div>
    </div>
</section>



<div>
    <img class="ABNC" src="trangchu/images/bn9.png" alt="">
     <img class="ABNC" src="trangchu/images/bn10.png" alt="">
     <img class="ABNC" src="trangchu/images/bn11.png" alt="">
     <img class="ABNC" src="trangchu/images/bn12.png" alt="">
</div>


@stop()


{{-- <style>
    input#search {
    /* float: right; */
    
    /* position: relative; */
    margin-top: -60px;
    margin-left: 1.5cm;
    width: 29cm;
}
</style> --}}
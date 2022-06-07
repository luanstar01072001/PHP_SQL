@extends('layout.customer')
@section('main')

<!-- breadcrumb -->


    <!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
				<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
					Trang chủ
					<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
				</a>
				<span class="stext-109 cl4">
					{{ $xem->TENMYPHAM }}
				</span>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="/{{ $xem->ANH_1}}">
									<div class="wrap-pic-w pos-relative">
										<img class="AL1" src="/{{ $xem->ANH_1}}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="/{{ $xem->ANH_1}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							{{ $xem->TENMYPHAM }}
						</h4>

						<span class="mtext-106 cl2">
							{{number_format($xem->GIAMYPHAM)}}đ   &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<s>{{number_format($xem->GIAMYPHAMGIAM)}}đ</s> 
						</span>

						<p class="stext-102 cl3 p-t-23">
							<?php 
							echo $xem->CHITIET_1;
							?>
						</p>
						
						<!--  -->
						<div class="p-t-33">
							{{-- <div class="flex-w flex-r-m p-b-10"> --}}
								{{-- <div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>
								
									</div> --}}
									<form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
										@csrf
											<div class="quantity">
												<span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
												<input type="number" class="qty-text" id="qty" step="1" min="1" max="10" name="qty" value="1">
												<span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
												<input type="hidden" name="productid_hidden" value="{{$xem->id}}" />
		
											</div>
		
											<button type="submit" name="submit"  class="btn alazea-btn ml-15">Thêm vào giỏ hàng</button>
									</form>
									{{-- <form action="{{ route('themvaogiohang') }}" method="POST">
										@csrf
										<div class="flex-w flex-r-m p-b-10">
											<div class="size-204 flex-w flex-m respon6-next">
												<div class="wrap-num-product flex-w m-r-20 m-tb-10">
													<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
														<i class="fs-16 zmdi zmdi-minus"></i>
													</div>
			
													<input class="mtext-104 cl3 txt-center num-product" type="number" name="soluong" value="1">
			
													<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
														<i class="fs-16 zmdi zmdi-plus"></i>
													</div>
												</div>
												
												<input type="hidden" name="myphamid" value="{{ $xem->id }}" >
												<input type="hidden" name="giamypham" value="{{ $xem->GIAMYPHAM }}" >
												<button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
													Thêm vào giỏ hàng
												</button>
											</div>
										</div>	
									</form> --}}
								{{-- </div>
							</div>	 --}}
						</div>

						<!--  -->
						{{-- <div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
									<i class="zmdi zmdi-favorite"></i>
								</a>
							</div> --}}
							{{-- <form class="cart clearfix d-flex align-items-center" action="{{url('/savecart')}}" method="post">
								@csrf
									<div class="quantity">
										<span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
										<input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">
										<span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
										<input type="hidden" name="productid_hidden" value="{{$xem->id}}" />

									</div>

									<button type="submit" name="submit"  class="btn alazea-btn ml-15">Thêm vào giỏ</button>
							</form> --}}

							{{-- <form action="{{url('/savecart')}}" method="post">
                                @csrf
            
                                <a href="" style="line-height: 46px; width: 50px; height: 50px; background: white;" class="icon-cart block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    <button type="submit" name="submit" style="border: 1px solid #bac34e; width: 100%; height: 100%; border: none">Thêm vào giỏ
                                        <input type="hidden" name="productid_hidden" value="{{$xem->id}}" />
                                        <input type="hidden" data-toggle="collapse" name="qty" min="1" value="1" />
                                        <i class="pe-7s-shuffle"></i>
                                    </button>
            
            
                                </a>
            
                            </form> --}}
							{{-- <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a> --}}
						{{-- </div> --}}
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Thông tin sản phẩm  </a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Cách sử dụng</a>
						</li>
						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information1" role="tab">Thành phần</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Đánh giá (1)</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									<?php 
							        echo $xem->CHITIET_2;
							        ?> <br>
									<?php 
							        echo $xem->CHITIET_3;
							        ?> <br>
									<?php 
							        echo $xem->CHITIET_4;
							        ?> <br>
									<?php 
							        echo $xem->CHITIET_5;
							        ?> <br>
									<?php 
							        echo $xem->CHITIET_6;
							        ?> <br>
									
									<i><strong>THÔNG TIN THƯƠNG HIỆU</strong></i>	 <br>

                                    La Roche-Posay là nhãn hàng dược mỹ phẩm đến từ Pháp trực thuộc tập đoàn L’Oreal đã hoạt động được hơn 30 năm, phối hợp nghiên cứu với các bác sĩ da liễu trên toàn thế giới cho ra đời các sản phẩm dưỡng da hướng đến thị trường sản phẩm dành cho da nhạy cảm, ngoài ra còn có dòng sản phẩm dành cho trẻ em. Thành phần nổi bật xuất hiện trong các sản phẩm của La Roche-Posay (LRP) là nước suối khoáng – thermal spring water. Tất cả những sản phẩm thuộc La Roche Posay đều được thử nghiệm lâm sàng và đánh giá khách quan từ bệnh viện Saint Jacques-Toulouse. Quy trình bào chế của sản phẩm cũng rất nghiêm ngặt mang lại cho người sử dụng vẻ đẹp tự nhiên và rất an toàn.
                                    --
									<br>
                                    Hạn sử dụng: 3 năm kể từ ngày sản xuất
									<br>
                                    Ngày sản xuất: In trên bao bì
									<br>
                                    Thành phần: Xem chi tiết trên bao bì
									<br>
                                    Xuất xứ thương hiệu: Pháp
									<br>
                                    Nơi sản xuất: Pháp
									<br>

                                    ***Chi tiết mẫu mã bao bì có thể thay đổi tùy đợt nhập hàng***
									
								</p>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<p><?php 
										echo $xem->CHITIET_7;
										?></p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="information1" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<p><?php 
										echo $xem->CHITIET_8;
										?></p>
								</div>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										<!-- Review -->
										<div class="flex-w flex-t p-b-68">
											<div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
												<img src="/trangchu/images/avatar-01.jpg" alt="AVATAR">
											</div>

											<div class="size-207">
												<div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														Ngô Văn Luân
													</span>

													<span class="fs-18 cl11">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star-half"></i>
													</span>
												</div>

												<p class="stext-102 cl6">
													{{ $xem->TENMYPHAM }}
												</p>
											</div>
										</div>
										
										<!-- Add review -->
										<form class="w-full">
											<h5 class="mtext-108 cl2 p-b-7">
												Email của bạn
											</h5>

											<p class="stext-102 cl6">
												
											</p>

											<div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Xếp hạng
												</span>

												<span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating">
												</span>
											</div>

											<div class="row p-b-25">
												<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Đánh giá</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="name">Tên</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="email">Email</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
												</div>
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
												Đăng ký
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			

			<span class="stext-107 cl6 p-lr-25">
				{{ $xem->TENMYPHAM }}
			</span>
		</div>
	</section>


		<!-- Related Products -->
		<section class="sec-relate-product bg0 p-t-45 p-b-105">
			<div class="container">
				<div class="p-b-45">
					<h3 class="ltext-106 cl5 txt-center">
						SẢN PHẨM TƯƠNG TỰ 
						
					</h3> <br>
					<p class="TT1">{{ $xem->TENMYPHAM }}</p>
				</div>
		
				<div class="row isotope-grid">
        
								@foreach($SPTT as $item )
					
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
													 <S>{{number_format($item->GIAMYPHAMGIAM)}}đ </S>  
												</span>
											</div>
					
											<div class="block2-txt-child2 flex-r p-t-3">
												<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
													<img class="icon-heart1 dis-block trans-04" src="/trangchu/images/icons/icon-heart-01.png"
														alt="ICON">
													<img class="icon-heart2 dis-block trans-04 ab-t-l"
														src="/trangchu/images/icons/icon-heart-02.png" alt="ICON">
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
						</div>
					</div>
				</div>
			</div>
		</section>

    @stop

<style>
	span.stext-109.cl4 {
    margin-top: 25px;
    margin-bottom: 30px;
}
a.stext-109.cl8.hov-cl1.trans-04{
	margin-top: 25px;
    margin-bottom: 30px;

}

.wrap-pic-w img {
    /* width: 76%; */
    max-width: 99%;
    border: 1px solid #ccc;
	border-radius: 5px;
    position: relative;
    /* left: -1px; */
    /* border-right: 1px solid black; */
    /* box-shadow: 0 0px 3px 0px rgb(0 0 0 / 20%); */
}

.mtext-106{
	color: #d0021c;
}
.mtext-106 s{
	color: black;
}

.bor1 {
    border-radius: 23px;
    /* margin-right: 67px; */
    position: relative;
    left: -12px;
}
.flex-w.flex-m.p-l-100.p-t-40.respon7 {
    position: relative;
    left: 11px;
}
.TT1{
	text-align: center;
}
.quantity {
    display: flex;
	background-color: #509cc9;
    
    outline: none;
    border: none;
    border-radius: calc(var(--layer-corner-radius) * 1px);
  
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4;
	height:1cm;
	text-align: center;
}
span.qty-minus {
    width: 1cm;
    text-align: center;
    padding-top: 13px;
    color: white;
}
span.qty-plus{
	width: 1cm;
    text-align: center;
    padding-top: 13px;
    color: white;

}
input#qty {
    text-align: center;
    color: black;
    font-weight: 600;
}
</style>

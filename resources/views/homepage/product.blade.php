@extends('homepage.layouts.main')
@section('content')
	<link rel="stylesheet" type="text/css" href="/se03/public/css/homepage/product_styles.css">
	<link rel="stylesheet" type="text/css" href="/se03/public/css/homepage/product_responsive.css">
<!-- Single Product -->
<div class="container">
	<div class="row">
		<br><br><br>
	</div>
</div>

<div class="single_product">
	<div class="container">
		<div class="row">

			<!-- Images -->
			<!-- Selected Image -->
			<div class="col-lg-5 order-1">
				<div class="image_selected"><img src="/se03/public/{{$product->images[0]->image_path}}" alt=""></div>
			</div>

			<!-- Description -->
			<div class="col-lg-7 order-2">
				<div class="product_description">
					<div class="product_name">{{$product->name}}</div>
					<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
					<div class="product_text"><p style="font-size:16px">Mua ngay sản phẩm <strong>{{$product->name}}</strong> giá ưu đãi.</p></div>
					<div class="product_price">
						@if($product->promotion_price!=0)
                                    <strike class="mr-1">{{$product->unit_price}}đ</strike><span style="color: red">&nbsp;&nbsp;{{$product->promotion_price}}đ</span>
                                @else
                                    {{$product->unit_price}}đ<
                                @endif
					</div>
					<div class="order_info d-flex flex-row">
						<form action="#">
							<div class="clearfix" style="z-index: 1000;">
								<!-- Product Quantity -->
								<div class="product_quantity clearfix">
									<span>Số lượng: </span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="lnr lnr-chevron-up"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="lnr lnr-chevron-down"></i></div>
									</div>
								</div>
							</div>

							<div class="button_container">
								<button type="button" class="button cart_button">Thêm vào giỏ hàng</button>
								<div class="product_fav p_icon"><i class="lnr lnr-heart"></i></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div></br></br>
	<div class="container">
		<h3><i>Đặc điểm nổi bật của {{$product->name}}</i></h3></br>
		<h6>{!!$product->detail!!}</h6>
	</div>
</div>
<!-- Brands -->

<div class="brands">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="brands_slider_container">
					
					<!-- Brands Slider -->

					<div class="owl-carousel owl-theme brands_slider">
						
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('homepage/images/brands_1.jpg')}}" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('homepage/images/brands_2.jpg')}}" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('homepage/images/brands_3.jpg')}}" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('homepage/images/brands_4.jpg')}}" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('homepage/images/brands_5.jpg')}}" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('homepage/images/brands_6.jpg')}}" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('homepage/images/brands_7.jpg')}}" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('homepage/images/brands_8.jpg')}}" alt=""></div></div>

					</div>
					
					<!-- Brands Slider Navigation -->
					<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
					<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
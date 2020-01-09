
@extends('homepage.layouts.main')
@section('content')

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-5">
                        <h3>Chào mừng đến với<br />TechStore!</h3>
                        <a class="white_bg_btn" href="#">Bắt đầu khám phá</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="halemet_img">
                            <img src="/se03/public/uploads/product_images/homepage.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!--================Feature Product Area =================-->
    <section class="feature_product_area">
        <div class="main_box">
            <div class="container">
                <div class="row hot_product_inner">
                    <div class="col-lg-6">
                        <div class="hot_p_item">
                            <img class="img-fluid" src="{{asset('homepage/img/product/hot-product/hot-p-1.jpg')}}'" alt="">
                            <div class="product_text">
                                <h4>Hot Deals of <br />this Month</h4>
                                <a href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hot_p_item">
                            <img class="img-fluid" src="{{asset('homepage/img/product/hot-product/hot-p-2.jpg')}}" alt="">
                            <div class="product_text">
                                <h4>Hot Deals of <br />this Month</h4>
                                <a href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feature_product_inner">
                    <div class="main_title">
                        <h2>Featured Products</h2>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                    <div class="feature_p_slider owl-carousel">
                        <div class="item">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{asset('homepage/img/product/feature-product/f-p-1.jpg')}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="#"><h4>Long Sleeve TShirt</h4></a>
                                <h5>$150.00</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{asset('homepage/img/product/feature-product/f-p-2.jpg')}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="#"><h4>Long Sleeve TShirt</h4></a>
                                <h5>$150.00</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{asset('homepage/img/product/feature-product/f-p-3.jpg')}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="#"><h4>Long Sleeve TShirt</h4></a>
                                <h5>$150.00</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{asset('homepage/img/product/feature-product/f-p-4.jpg')}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="#"><h4>Long Sleeve TShirt</h4></a>
                                <h5>$150.00</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{asset('homepage/img/product/feature-product/f-p-1.jpg')}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="#"><h4>Long Sleeve TShirt</h4></a>
                                <h5>$150.00</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{asset('homepage/img/product/feature-product/f-p-2.jpg')}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="#"><h4>Long Sleeve TShirt</h4></a>
                                <h5>$150.00</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{asset('homepage/img/product/feature-product/f-p-3.jpg')}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="#"><h4>Long Sleeve TShirt</h4></a>
                                <h5>$150.00</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{asset('homepage/img/product/feature-product/f-p-4.jpg')}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="#"><h4>Long Sleeve TShirt</h4></a>
                                <h5>$150.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Feature Product Area =================-->
    <!--================Latest Product Area =================-->
    <section class="feature_product_area latest_product_area">
        <div class="main_box">
            <div class="container">
                <div class="feature_product_inner">
                    <div class="main_title">
                        <h2>Sản phẩm mới nhất</h2>
                        <p>Những mặt hàng mới được cập nhật liên tục</p>
                    </div>
                    <div class="latest_product_inner row">
                    @foreach($featureProduct as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="/se03/public/{{$item->images[0]->image_path}}" width=262px height=262px alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="#"><h4>{{$item->name}}</h4></a>
                                <h5>{{$item->unit_price}}đ</h5>
                            </div>
                        </div>
                    @endforeach
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <!--================End Latest Product Area =================-->
    <!--================Clients Logo Area =================-->
    <section class="clients_logo_area">
        <div class="container">
            <div class="main_title">
                <h2>Top Brands of this Month</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="clients_slider owl-carousel">
                <div class="item">
                    <img src="{{asset('homepage/img/clients-logo/c-logo-1.png')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('homepage/img/clients-logo/c-logo-2.png')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('homepage/img/clients-logo/c-logo-3.png')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('homepage/img/clients-logo/c-logo-4.png')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('homepage/img/clients-logo/c-logo-5.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--================End Clients Logo Area =================-->
    <!--================Most Product Area =================-->
    <section class="most_product_area">
        <div class="main_box">
            <div class="container">
                <div class="main_title">
                    <h2>Most Searched Products</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
                <div class="row most_product_inner">
                    <div class="col-lg-3 col-sm-6">
                        <div class="most_p_list">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{asset('homepage/img/product/most-product/m-product-1.jpg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Black lace Heels</h4></a>
                                    <h3>$189.00</h3>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{asset('homepage/img/product/most-product/m-product-2.jpg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Black lace Heels</h4></a>
                                    <h3>$189.00</h3>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{asset('homepage/img/product/most-product/m-product-3.jpg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Black lace Heels</h4></a>
                                    <h3>$189.00</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="most_p_list">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{asset('homepage/img/product/most-product/m-product-4.jpg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Black lace Heels</h4></a>
                                    <h3>$189.00</h3>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{asset('homepage/img/product/most-product/m-product-5.jpg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Black lace Heels</h4></a>
                                    <h3>$189.00</h3>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{asset('homepage/img/product/most-product/m-product-6.jpg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Black lace Heels</h4></a>
                                    <h3>$189.00</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="most_p_list">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{asset('homepage/img/product/most-product/m-product-7.jpg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Black lace Heels</h4></a>
                                    <h3>$189.00</h3>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{asset('homepage/img/product/most-product/m-product-8.jpg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Black lace Heels</h4></a>
                                    <h3>$189.00</h3>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{asset('homepage/img/product/most-product/m-product-9.jpg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Black lace Heels</h4></a>
                                    <h3>$189.00</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="most_p_list">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{asset('homepage/img/product/most-product/m-product-10.jpg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Black lace Heels</h4></a>
                                    <h3>$189.00</h3>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{asset('homepage/img/product/most-product/m-product-11.jpg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Black lace Heels</h4></a>
                                    <h3>$189.00</h3>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{asset('homepage/img/product/most-product/m-product-12.jpg')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Black lace Heels</h4></a>
                                    <h3>$189.00</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Most Product Area =================-->

@endsection

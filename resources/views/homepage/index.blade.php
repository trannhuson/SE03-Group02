
@extends('homepage.layouts.main')
@section('content')

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-6">
                        <h3 style="color:#000000">Chào mừng đến với<br /><b><i>TechStore</i></b> !</h3>
                        <a class="white_bg_btn btn-lg" href="/se03/public/shop/category">Bắt đầu khám phá</a>
                    </div>
                    <div class="col-lg-6">
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
                            <img class="img-fluid" src="{{asset('homepage/img/product/hot-product/hot-p-1.jpg')}}" alt="">
                            <div class="product_text">
                                <h4 style="color:#1f1f1f">Deal hot <br />trong tháng</h4>
                                <!-- Nút Brand Samsung -->
                                <a href="#" style="color:#1f1f1f"><b>Shopping</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hot_p_item">
                            <img class="img-fluid" src="{{asset('homepage/img/product/hot-product/hot-p-2.jpg')}}" alt="">
                            <div class="product_text">
                                <h4 style="color:#ffffff">Deal hot <br />trong tháng</h4>
                                <!-- Nút Brand Apple -->
                                <a href="#" style="color:#ffffff"><b>Shopping</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Clients Logo Area =================-->
    <section class="clients_logo_area">
        <div style="background-image: url('/se03/public/homepage/img/background3.png');">
            <div class="container">
                <div class="main_title">
                    <h2>Thương hiệu nổi bật</h2>
                    <p>Những thương hiệu hàng đầu</p>
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
        </div>
    </section>
    <!--================End Clients Logo Area =================-->
    <section class="feature_product_area">
        <div class="main_box">
            <div class="container">
                <div class="feature_product_inner">
                    <div class="main_title">
                        <h2>Sản phẩm nổi bật</h2>
                        <p>Những sản phẩm được yêu thích nhất</p>
                    </div>
                    <div class="feature_p_slider owl-carousel">
                        @foreach($featureProduct as $featureItem)
                        <div class="item">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img height="262" src="/se03/public/{{$featureItem->images[0]->image_path}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="/se03/public/shop/product/{{$featureItem->id}}"><h4>{{$featureItem->name}}</h4></a>
                                <h5>{{$featureItem->unit_price}}đ</h5>
                            </div>
                        </div>
                        @endforeach
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
                    @foreach($latestProduct as $latestItem)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img height="262" src="/se03/public/{{$latestItem->images[0]->image_path}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="/se03/public/shop/product/{{$latestItem->id}}"><h4>{{$latestItem->name}}</h4></a>
                                <h5>{{$latestItem->unit_price}}đ</h5>
                            </div>
                        </div>
                    @endforeach
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <!--================End Latest Product Area =================-->
    <!--================Most Product Area =================-->
    <section class="most_product_area">
        <div class="main_box">
            <div class="container">
                <div class="main_title">
                    <h2 class="phukien_title" style="color:red"><a href="/se03/public/shop/category/5">Phụ kiện điện thoại</a></h2>
                    <p>Những phụ kiện không thể thiếu cho dế yêu của bạn</p>
                </div>
                <div class="row most_product_inner">
                    <div class="col-lg-4 col-sm-6">
                        <div class="most_p_list">
                            @foreach($accessories1 as $ac1)
                            <div class="media">
                                <div class="d-flex">
                                    <img src="/se03/public/{{$ac1->images[0]->image_path}}" height="70" width="70" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="/se03/public/shop/product/{{$ac1->id}}"><h4>{{$ac1->name}}</h4></a>
                                    <h3>{{$ac1->unit_price}}đ</h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="most_p_list">
                            @foreach($accessories2 as $ac2)
                            <div class="media">
                                <div class="d-flex">
                                    <img src="/se03/public/{{$ac2->images[0]->image_path}}" height="70" width="70" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="/se03/public/shop/product/{{$ac2->id}}"><h4>{{$ac2->name}}</h4></a>
                                    <h3>{{$ac2->unit_price}}đ</h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="most_p_list">
                            @foreach($accessories3 as $ac3)
                            <div class="media">
                                <div class="d-flex">
                                    <img src="/se03/public/{{$ac3->images[0]->image_path}}" height="70" width="70" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="/se03/public/shop/product/{{$ac3->id}}"><h4>{{$ac3->name}}</h4></a>
                                    <h3>{{$ac3->unit_price}}đ</h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Most Product Area =================-->

@endsection

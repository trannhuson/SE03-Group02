@extends('homepage.layouts.main')
@section('css')

@endsection
@section('content')


    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Shop Category Page</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="category.html">Category</a>
                        <a href="category.html">Women Fashion</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!--================Category Product Area =================-->
    <section class="cat_product_area p_120">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="product_top_bar">
                        <div class="left_dorp">
                            
                            <select class="show">
                                <option value="1">Show 12</option>
                                <option value="2">Show 14</option>
                                <option value="4">Show 16</option>
                            </select>
                        </div>
                        <div class="right_page ml-auto">
                            <nav class="cat_page" aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item blank"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="latest_product_inner row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
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
                        <div class="col-lg-4 col-md-4 col-sm-6">
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
                        <div class="col-lg-4 col-md-4 col-sm-6">
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
                        <div class="col-lg-4 col-md-4 col-sm-6">
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
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{asset('homepage/img/product/feature-product/f-p-5.jpg')}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="#"><h4>Long Sleeve TShirt</h4></a>
                                <h5>$150.00</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{asset('homepage/img/product/feature-product/f-p-6.jpg')}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="#"><h4>Long Sleeve TShirt</h4></a>
                                <h5>$150.00</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{asset('homepage/img/product/feature-product/f-p-7.jpg')}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="#"><h4>Long Sleeve TShirt</h4></a>
                                <h5>$150.00</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{asset('homepage/img/product/feature-product/f-p-8.jpg')}}" alt="">
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
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets cat_widgets">
                            <div class="l_w_title">
                                <h3>Category</h3>
                            </div>
                            @foreach($category as $item)
                                <div class="widgets_inner">
                                    <ul class="list">
                                        <li><a href="#">{{$item->name}}</a></li>
                                    </ul>
                                </div>
                            @endforeach    
                        </aside>
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Brands</h3>
                            </div>
                            <div class="widgets_inner">
                                
                                    <ul class="list">
                                        @foreach($brand as $item)
                                            <li><a href="#">{{ $item->name}}</a></li>
                                    
                                        @endforeach
                                    </ul>
                                    
                            </div>
                            
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
    <!--================Most Product Area =================-->
    <section class="most_product_area most_p_withoutbox">
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
    </section>
    <!--================End Most Product Area =================-->

@endsection

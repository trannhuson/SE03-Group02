@extends('homepage.layouts.main')
@section('css')

@endsection
@section('content')


    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>{{$loai_sp->name}}</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="category.html">Category</a>
                        <a href="category.html">{{$loai_sp->name}}</a>
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
                            <!-- count ten-->
                        </div>
                        <div class="right_page ml-auto">
                            <div class="row">{{$sp_theoloai->links()}}</div>
                            
                        </div>
                    </div>
                    <div class="latest_product_inner row">
                    @foreach($sp_theoloai as $item)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img height="262" src="/SE03/public/{{$item->images[0]->image_path}}" alt="">
                                    <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="/se03/public/shop/product/{{$item->id}}"><h4>{{$item->name}}</h4></a>
                                @if($item->promotion_price!=0)
                                    <h5><strike class="mr-1">{{$item->unit_price}}đ</strike><span style="color: red">{{$item->promotion_price}}đ</h5></span>
                                @else
                                    <h5 style="color: red">{{$item->unit_price}}đ</h5>
                                @endif
                            </div>
                        </div>
                    @endforeach    
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets cat_widgets">
                            <div class="l_w_title">
                                <h3>Loại sản phẩm</h3>
                            </div>
                            @foreach($category as $item)
                                <div class="widgets_inner">
                                    <ul class="list">
                                        <li><a href="{{route('categorys',$item->id)}}">{{$item->name}}</a></li>
                                    </ul>
                                </div>
                            @endforeach    
                        </aside>
                        <aside class="left_widgets cat_widgets">
                            <div class="l_w_title">
                                <h3>Hãng</h3>
                            </div>
                             @foreach($brand as $item)
                            <div class="widgets_inner">
                                <ul class="list">   
                                    <li><a href="{{route('brands',$item->id)}}">{{$item->name}}</a></li>    
                                </ul>            
                            </div>
                            @endforeach
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
                <h2>Các sản phẩm khác</h2>
            </div>
            <div class="latest_product_inner row">
            @foreach($sp_khac as $item)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="/SE03/public/{{$item->images[0]->image_path}}" alt="" height="100px" width="100px">
                            <div class="p_icon">
                                <a href="#"><i class="lnr lnr-heart"></i></a>
                                <a href="#"><i class="lnr lnr-cart"></i></a>
                            </div>
                        </div>
                        <a href="#"><h4>{{$item->name}}</h4></a>
                        @if($item->promotion_price!=0)
                            <h5 ><strike class="mr-1">{{$item->unit_price}}đ</strike><span style="color: red">{{$item->promotion_price}}đ</h5></span>
                        @else
                            <h5 style="color: red">{{$item->unit_price}}đ</h5>
                        @endif
                    </div>
                    
                </div>
            @endforeach 
            <div class="center_page ml-auto">
                <div class="row">{{$sp_khac->links()}}</div>  
            </div>  
         </div>         
        </div>
    </section>
    <!--================End Most Product Area =================-->

@endsection

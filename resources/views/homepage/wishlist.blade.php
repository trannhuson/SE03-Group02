@extends('homepage.layouts.main')

@section('content')


    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Wish List</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="cart.html">Wish List</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($wishlist as $item)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="/se03/public/{{$item->products->images[0]->image_path}}" width="55px" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>{{$item->products->name}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5 style="color: red">{{$item->products->unit_price}}đ</h5>
                                </td>
                                <td>
                                   <div>{{$item->products->category->name}}</div>
                                </td>
                                <td>
                                    <h5>{{$item->products->brand->name}}</h5>
                                </td>
                                <td>
                                    <a style="cursor: pointer" href="deleteWishlist?id={{$item->products->id}}"><button class="btn btn-danger">Delete</button></a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

@endsection

<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu row m0">
        <div class="container">
            <div class="float-left">
                <a href="mailto:viethai.trx@gmail.com">support@abc.com</a>
                <a href="#">Welcome to Shop</a>
            </div>
            <div class="float-right">
                <ul class="header_social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="homepage"><img src="{{asset('homepage/img/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{asset('shop/homepage')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{asset('shop/category/1')}}">Danh mục</a></li>

                        <li class="nav-item submenu dropdown">
                            <a href="/Home/Blog" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Danh sách yêu thích</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{asset('shop/blog')}}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('shop/blog-detail')}}">Blog Details</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{asset('shop/contact')}}">Liên hệ</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="{{asset('shop/cart')}}" class="cart"><i class="lnr lnr lnr-cart"></i></a></li>
                        <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->

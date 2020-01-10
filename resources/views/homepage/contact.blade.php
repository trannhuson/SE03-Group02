@extends('homepage.layouts.main')

@section('content')

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Liên hệ</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="contact.html">Liên hệ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <div class="container">
            <div class="contact_info f_p_item">
                <div class="info_item">
                    <i class="lnr lnr-home"></i>
                    <h6>Hà Nội, Việt Nam</h6>
                    <p>Đại học Khoa học Tự nhiên, ĐHQGHN</p>
                </div>
                <div class="info_item">
                    <i class="lnr lnr-phone-handset"></i>
                    <h6><a href="#">(+84) 961317991</a></h6>
                    <p>Mon to Fri 9am to 6 pm</p>
                </div>
                <div class="info_item">
                    <i class="lnr lnr-envelope"></i>
                    <h6><a href="#">viethai.trx@gmail.com</a></h6>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

@endsection

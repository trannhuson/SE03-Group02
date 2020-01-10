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
                    <h6>California, United States</h6>
                    <p>Santa monica bullevard</p>
                </div>
                <div class="info_item">
                    <i class="lnr lnr-phone-handset"></i>
                    <h6><a href="#">00 (440) 9865 562</a></h6>
                    <p>Mon to Fri 9am to 6 pm</p>
                </div>
                <div class="info_item">
                    <i class="lnr lnr-envelope"></i>
                    <h6><a href="#">support@colorlib.com</a></h6>
                    <p>Send us your query anytime!</p>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

@endsection

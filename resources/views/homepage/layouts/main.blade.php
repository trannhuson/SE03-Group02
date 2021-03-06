<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>ListAshop</title>
    <!-- Bootstrap CSS -->

    <link href="{{asset('homepage/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('homepage/vendors/linericon/style.css')}}" rel="stylesheet" />
    <link href="{{asset('homepage/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('homepage/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('homepage/vendors/lightbox/simpleLightbox.css')}}" rel="stylesheet" />
    <link href="{{asset('homepage/vendors/nice-select/css/nice-select.css')}}" rel="stylesheet" />
    <link href="{{asset('homepage/vendors/animate-css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('homepage/vendors/jquery-ui/jquery-ui.css')}}" rel="stylesheet" />

    <!-- main css -->

    <link href="{{asset('homepage/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('homepage/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>




    @include('homepage.layouts.header')
    @yield('content')
    @include('homepage.layouts.footer')



    <script src="{{asset('homepage/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('homepage/js/popper.js')}}"></script>
    <script src="{{asset('homepage/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('homepage/js/stellar.js')}}"></script>
    <script src="{{asset('homepage/vendors/lightbox/simpleLightbox.min.js')}}"></script>
    <script src="{{asset('homepage/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('homepage/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('homepage/vendors/isotope/isotope-min.js')}}"></script>
    <script src="{{asset('homepage/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('homepage/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('homepage/js/mail-script.js')}}"></script>
    <script src="{{asset('homepage/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('homepage/vendors/flipclock/timer.js')}}"></script>
    <script src="{{asset('homepage/vendors/counter-up/jquery.counterup.js')}}"></script>

    <script src="{{asset('homepage/js/theme.js')}}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.wish-list').click(function () {
                var productid = jQuery(this).attr('productid');
                var customerid = jQuery('#id_customer').attr('id_customer');
                if(customerid==-1){
                    console.log('chua dang nhap')
                }
                else{
                    jQuery.ajax({
                        url:'{{asset("shop/addwishlist")}}',
                        headers: {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        },
                        method : 'post',
                        data:{
                            id_product : productid,
                            id_customer :customerid
                        }
                    }).done(function (data) {
                        alert("Đã thêm sản phẩm vào yêu thích.")
                    })
                }
            });
            jQuery('.add-to-cart').click(function () {
                var productid = jQuery(this).attr('productid');
                var customerid = jQuery('#id_customer').attr('id_customer');
                console.log(productid);
                if(customerid==-1){
                    console.log('chua dang nhap')
                }
                else{
                    jQuery.ajax({
                        url:'{{asset("shop/addtocart")}}',
                        headers: {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        },
                        method : 'post',
                        data:{
                            id_product : productid,
                            id_customer :customerid
                        }
                    }).done(function (data) {
                        alert("Đã thêm sản phẩm vào giỏ hàng.")
                    })
                }
            })
        })
    </script>



</body>

</html>


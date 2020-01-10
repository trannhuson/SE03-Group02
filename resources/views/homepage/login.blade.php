@extends('homepage.layouts.main')

@section('content')
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-center">
				<h2>Login/Register</h2>
				<div class="page_link">
					<a href="index.html">Home</a>
					<a href="login.html">Login</a>
				</div>
			</div>
		</div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Login Box Area =================-->
<section class="login_box_area p_120">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="login_box_img">
					<img class="img-fluid" src="{{asset('homepage/img/login.jpg')}}" alt="">
					<div class="hover">
						<h4>New to our website?</h4>
						<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
						<a class="main_btn" href="registration.html">Create an Account</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="login_form_inner">
					<h3>Log in to enter</h3>
					@if(count($errors)>0)
	                    <div class="alert alert-danger">
	                        @foreach($errors->all() as $err)
	                            {{$err}}<br>
	                        @endforeach
	                    </div>

	                @endif
	                <!--Tiếp theo ta sẽ in cái thông báo ra-->
	                @if(session('thongbao'))
	                    <div class="alert alert-success">
	                        {{session('thongbao')}}
	                    </div>
	                @endif
					<form class="row login_form" action="login" method="post" id="contactForm" novalidate="novalidate">
						<input type="hidden" name="_token" value="{{csrf_token()}}" />
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="email" name="email" placeholder="email">
						</div>
						<div class="col-md-12 form-group">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
						<div class="col-md-12 form-group">
							<div class="creat_account">
								<input type="checkbox" id="f-option2" name="selector">
								<label for="f-option2">Keep me logged in</label>
							</div>
						</div>
						<div class="col-md-12 form-group">
							<button type="submit" value="submit" class="btn submit_btn">Log In</button>
							<a href="#">Forgot Password?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Login Box Area =================-->
@endsection

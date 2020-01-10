@extends('homepage.layouts.main')

@section('content')
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-center">
				<h2>Order Confirmation</h2>
				<div class="page_link">
					<a href="index.html">Home</a>
					<a href="confirmation.html">Confirmation</a>
				</div>
			</div>
		</div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Order Details Area =================-->
<section class="order_details p_120">
	<div class="container">
		<h3 class="title_confirmation">Thank you. Your order has been received.</h3>
		<div class="row order_d_inner">
			<div class="col-lg-4">
				<div class="details_item">
					<h4>Order Info</h4>
					<ul class="list">
						<li><a href="#"><span>Customer Name</span> : {{$customer->name}}</a></li>
						<li><a href="#"><span>Email</span> : {{$customer->email}}</a></li>
						<li><a href="#"><span>Phone</span> : {{$customer->phone_number}}</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="details_item">
					<h4>Shipping Address</h4>
					<ul class="list">
						<li><a href="#"><span>Address</span> : {{$address}}</a></li>

					</ul>
				</div>
			</div>
		</div>
		<div class="order_details_table">
			<h2>Order Details</h2>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Product</th>
							<th scope="col">Quantity</th>
							<th scope="col">Total</th>
						</tr>
					</thead>
					<tbody>
                    @foreach($cartItem as $item)
						<tr>
							<td>
								<p>{{$item->product->name}}</p>
							</td>
							<td>
								<h5>x {{$item->quantity}}</h5>
							</td>
							<td>
								<p>{{$item->product->unit_price}}</p>
							</td>
						</tr>
					@endforeach
						<tr>
							<td>
								<h4>Subtotal</h4>
							</td>
							<td>
								<h5></h5>
							</td>
							<td>
								<p>$2160.00</p>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Shipping</h4>
							</td>
							<td>
								<h5></h5>
							</td>
							<td>
								<p>Flat rate: $50.00</p>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Total</h4>
							</td>
							<td>
								<h5></h5>
							</td>
							<td>
								<p>$2210.00</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<!--================End Order Details Area =================-->
@endsection

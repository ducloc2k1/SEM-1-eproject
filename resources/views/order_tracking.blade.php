
@extends('layouts.master')
@section('page_title',ucfirst('faqs'))
@section('main')
    <section class="main-cart">
        <div class="check-cart">
			<div class="container">
				<div class="tabs-cart">
					<div class="container">
						<ul>
                            <li>
                                <a href="{{route('shopping-cart')}}">Shopping Cart</a>
                            </li>
                            <li >
                                <a href="{{route('check-out')}}">Check Out</a>
                            </li>
                            <li class="active">
                                <a href="{{route('order-tracking')}}">Order Tracking</a>
                            </li>
                        </ul>
					</div>
				</div>
			</div>
		</div>
		<div class="main-order-tracking">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-push-2">
                        <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was.
                            given to you on your receipt and in the confirmation email you should have received.</p>
                    </div>
					<div class="container text-contact col-xs-12 col-sm-12 col-lg-offset-3 col-lg-6 col-md-offset-1 col-md-10">
						<form action="" method="POST" role="form" class="track_order">
							<div class="form-track-order">
								<div class="form-group">
									<label for="">Order ID</label>
									<input type="text" class="form-control" placeholder="Found in your order confirmation email.">
								</div>
								<div class="form-group">
									<label for="">Billing email</label>
									<input type="password" class="form-control" id="" placeholder="Email you used during checkout.">
								</div>
								<button type="submit" class="">TRACK</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </section>
@endsection

@extends('layouts.master')

@section('title' , '| Laravel Shopping Cart')

@section('content')
		<div class="row">
			<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4" id="checkout-form">
				<h1> CheckOut </h1>
				<h4> Your Total : $ {{ $total }} </h4>
				<form action="{{ route('checkout') }}" method="post">
					<div class="row">

						<div class="col-xs-12">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" id="name" class="form-control" required>
							</div>
						</div>
						
						<div class="col-xs-12">
							<div class="form-group">
								<label for="address">Address</label>
								<input type="text" id="address" class="form-control" required>
							</div>
						</div>
						
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-name">Card Holder Name</label>
								<input type="text" id="card-name" class="form-control">
							</div>
						</div>
						
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-number">Credit Card Number</label>
								<input type="text" id="card-number" class="form-control" required>
							</div>
						</div>
						
						<div class="col-xs-12">

							<div class="row">

								<div class="col-xs-6">
									<div class="form-group">
										<label for="card-expiry-month">Expiration Month</label>
										<input type="text" id="card-expiry-month">
									</div>
								</div>
								
								<div class="col-xs-6">
									<div class="form-group">
										<label for="card-expiry-year">Expiration Year</label>
										<input type="text" id="card-expiry-year">
									</div>
								</div>

							</div>
							
						</div>
						
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-cvc">CVC</label>
								<input type="text" id="card-cvc" class="form-control" required>
							</div>
						</div>
					
					</div><!-- END OF ROW -->
					{{ csrf_field() }}
					<button type="submit" class="btn btn-success"> Buy Now </button>
				</form>
			</div>
		</div>
				
@endsection
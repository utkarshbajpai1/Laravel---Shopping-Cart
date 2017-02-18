@extends('layouts.master')

@section('title' , '| Laravel Shopping Cart')

@section('content')
	@if(Session::has('cart'))
		<div class="row">
			<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
				<ul class="list-group">
					@foreach($products as $product)
						<li class="list-group-item">
							<span class="badge">{{ $product['qty'] }}</span>
							<strong> {{ $product['item']['title'] }} </strong>
							<span class="label label-success">{{ $product['price'] }}</span>
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs dropdown-toggle" dropdown-toggle="dropdown">
									Action <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Reduce By 1</a></li>
									<li><a href="#">Reduce All</a></li>
								</ul>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
				<strong> Total: {{ $totalPrice }} </strong>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
				<strong> <button type="button" class=" btn btn-success " > CheckOut </button> </strong>
			</div>
		</div>

	@else

		<div class="row">
			<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
				<h2>No Items in the Cart</h2>
			</div>
		</div>

	@endif
@endsection
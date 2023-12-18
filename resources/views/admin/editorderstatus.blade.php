
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Edit Product</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/business-casual.css') }}">
    <link rel="stylesheet" href="{{ asset('css/business-casual.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

	<style>
		.horizontal-radio-group {
			display: flex;
		}
	
		.form-check {
			margin-right: 10px; /* Adjust the spacing as needed */
		}
	</style>
</head>

<body  style="background:purple">


    <div class="brand">FootFits</div>
    <div class="address-bar"> Your Ultimate Destination for <strong>Stylish and Comfortable Footwear</strong></div>

	

	<div class="container">

		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">Edit Orders</h2>
					
					<div class="col-md-12">
						
						<div class="card">
				
							<form method="POST" action="{{url('editOrders/update/'.$order->id)}}" >
								@csrf
								<div class="mb-3">
									<label for="product_name" class="form-label">Order ID</label>
									<input type="text" class="form-control" name="product_name" id="product_name"
                                    value="" disabled>
								</div>
								<div class="mb-3">
									<label for="product_brand" class="form-label">Customer ID</label>
									<input type="text" class="form-control" name="product_brand" id="product_brand"
                                    value="" disabled>
								</div>
								<div class="mb-3">
									<label for="product_price" class="form-label">Product Name</label>
									<input type="text" class="form-control" name="product_price" id="product_price"
                                    value="" disabled>
								</div>
								<div class="mb-3">
									<label for="product_size" class="form-label">Product Size</label>
								
									{{-- <div class="horizontal-radio-group">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="product_size" id="size_10" value="10" required {{$products->product_size == 10 ? 'checked' : ''}}>
											<label class="form-check-label" for="size_10">10</label>
										</div>
								
										<div class="form-check">
											<input class="form-check-input" type="radio" name="product_size" id="size_11" value="11" required {{$products->product_size == 11 ? 'checked' : ''}}>
											<label class="form-check-label" for="size_11">11</label>
										</div>
								
										<div class="form-check">
											<input class="form-check-input" type="radio" name="product_size" id="size_12" value="12" required {{$products->product_size == 12 ? 'checked' : ''}}>
											<label class="form-check-label" for="size_12">12</label>
										</div>
								
										<div class="form-check">
											<input class="form-check-input" type="radio" name="product_size" id="size_13" value="13" required {{$products->product_size == 13 ? 'checked' : ''}}>
											<label class="form-check-label" for="size_13">13</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="product_size" id="size_14" value="14" required {{$products->product_size == 14 ? 'checked' : ''}}>
											<label class="form-check-label" for="size_14">14</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="product_size" id="size_15" value="15" required {{$products->product_size == 15 ? 'checked' : ''}}>
											<label class="form-check-label" for="size_15">15</label>
										</div>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	@include('includes.adminHeader')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Products</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/business-casual.css" rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
		rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
		rel="stylesheet" type="text/css">

</head>

<body  style="background:purple">

	

	<div class="container">

		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">Products</h2>
					<div class="card">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Product Name</th>
									<th>Product Brand</th>
									<th>Product Price</th>
									<th>Product Size</th>
									<th>Product Color</th>
									<th>Product Category</th>
									<th>Modify</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($products as $product)
								<tr>
									<td>{{ $product->id }}</td>
									<td>{{ $product->product_name }}</td>
									<td>{{ $product->product_brand }}</td>
									<td>{{ $product->product_price }}</td>
									<td>{{ $product->product_size }}</td>
									<td>{{ $product->product_color }}</td>
									<td>{{ $product->product_category }}</td>
									<td>
										<a href="{{url('editproducts/edit/'.$product->id)}}" class="btn btn-info">Edit</a>
										<a href="{{url('manageproducts/delete/'.$product->id)}}" class="btn btn-danger">Delete</a>
										</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					</div>

					<div class="col-md-12">
						<div class="card">
							<h1>Add Product</h1>
							<form method="POST" action="{{ route('AllProducts') }}" >
								@csrf
								<div class="mb-3">
									<label for="product_name" class="form-label">Product Name</label>
									<input type="text" class="form-control" name="product_name" id="product_name">
								</div>
								<div class="mb-3">
									<label for="product_brand" class="form-label">Product Brand</label>
									<input type="text" class="form-control" name="product_brand" id="product_brand">
								</div>
								<div class="mb-3">
									<label for="product_price" class="form-label">Product Price</label>
									<input type="text" class="form-control" name="product_price" id="product_price">
								</div>
								<div class="mb-3">
									<label for="product_size" class="form-label">Product Size</label>
									<input type="text" class="form-control" name="product_size" id="product_size">
								</div>
								<div class="mb-3">
									<label for="product_color" class="form-label">Product Color</label>
									<input type="text" class="form-control" name="product_color" id="product_color">
								</div>
								<div class="mb-3">
									<label for="product_category" class="form-label">Product Category</label>
									<input type="text" class="form-control" name="product_category" id="product_category">
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				
				</div>
			</div>
		</div>

	</div>
	<!-- /.container -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p>Copyright &copy; FootFits 2023</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function () {

		});
	</script>

</body>

</html>
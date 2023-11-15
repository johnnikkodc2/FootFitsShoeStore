<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Edit Product</title>

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

	<img src="img/logo.png"
		style="height:150px;width:150px;display: block; margin-left: auto; margin-right: auto;margin-bottom:0px">
	<div class="brand">FootFits</div>
	<div class="address-bar">Your Ultimate Destination for <strong>Stylish and Comfortable Footwear</strong></div>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">FootFits</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="Management_Orders.php">Orders</a></li>
					<li><a href="Management_Products.php?ProductAction=Add">Products</a></li>
					<li><a href="Management_ProductsList.php">Product List</a></li>
					<li><a href="Management_Customers.php">Customers</a></li>

				</ul>
			</div>
		</div>
	</nav>

	<div class="container">

		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">Products</h2>
					
					<div class="col-md-12">
						<div class="card">
							<h1>Edit Product</h1>
							<form method="POST" action="{{url('editProducts/update/'.$products->id)}}" >
								@csrf
								<div class="mb-3">
									<label for="product_name" class="form-label">Product Name</label>
									<input type="text" class="form-control" name="product_name" id="product_name"
                                    value="{{$products->product_name}}">
								</div>
								<div class="mb-3">
									<label for="product_brand" class="form-label">Product Brand</label>
									<input type="text" class="form-control" name="product_brand" id="product_brand"
                                    value="{{$products->product_brand}}">
								</div>
								<div class="mb-3">
									<label for="product_price" class="form-label">Product Price</label>
									<input type="text" class="form-control" name="product_price" id="product_price"
                                    value="{{$products->product_price}}">
								</div>
								<div class="mb-3">
									<label for="product_size" class="form-label">Product Size</label>
									<input type="text" class="form-control" name="product_size" id="product_size"
                                    value="{{$products->product_size}}">
								</div>
								<div class="mb-3">
									<label for="product_color" class="form-label">Product Color</label>
									<input type="text" class="form-control" name="product_color" id="product_color"
                                    value="{{$products->product_color}}">
								</div>
								<div class="mb-3">
									<label for="product_category" class="form-label">Product Category</label>
									<input type="text" class="form-control" name="product_category" id="product_category"
                                    value="{{$products->product_category}}">
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
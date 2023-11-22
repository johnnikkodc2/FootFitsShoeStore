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

	<title>Product List</title>

	
</head>

<body  style="background:purple">

	

	<div class="container">
		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">Product List</h2>
					<hr>
					<div class="col-lg-12">
						<div class="table-responsive">
							<table border="5px" class="table">
								<tr style="text-align: center; color: Black; font-weight: bold;">
									<td>Image</td>
									<td>Product ID</td>
									<td>Product Name</td>
									<td>Product Brand</td>
									<td>Product Size</td>
									<td>Product Color</td>
									<td>Product Price</td>
									<td>Product Category</td>
									<td>Action</td>
								</tr>

							
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container -->

	<footer>
		@include('includes.footer')
	</footer>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	

</body>

</html>
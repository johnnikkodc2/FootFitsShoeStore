
<!DOCTYPE html>
<html lang="en">

<head>
	@include('includes.adminHeader')
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
								
							  <h3>Credit Card Information</h3>
							  <p class="credit-card">Credit Card Number: {{ $order->payment_cardnumber }}</p>
					  
							  <!-- Shipping Details -->
							  <div class="shipping-details">
								  <h3>Shipping Details</h3>
								  <p><strong>Full Name:</strong> {{ $order->first_name }} {{ $order->last_name }}</p>
								  <p><strong>Address:</strong> {{ $order->address }}</p>
								  <p><strong>City:</strong> {{ $order->city }}</p>
								  <p><strong>ZIP Code:</strong> {{ $order->zip }}</p>
							  </div>
					  
							  <!-- Receipt Information -->
							  <div class="receipt-info">
								  <h3>Receipt Information</h3>
								  <p><strong>Receipt Number:</strong> {{ $order->id }}</p>
								  <p><strong>Receipt Date:</strong> {{ $order->created_at }}</p>
					  
							  </div>
								
								
								<div class="mb-3">
									<label for="product_category" class="form-label">Order Status		</label>
									<select class="form-control" name="product_status" id="product_brand" required>
										<option value="Processing">Processing</option>
										<option value="Out for delivery">Out for Delivery</option>
										<option value="Shipped">Shipped</option>
										<option value="Completed">Order Complete</option>
								
									</select>
								</div>



								<div class="mb-3">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
								<div class="mb-3">
								<button class="btn btn-primary" onclick="goBack()">Go Back</button>
							</div>
							</form>
					
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container -->


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function () {

		});
	</script>
 <script>
	function goBack() {
		window.history.back();
	}
</script>
</body>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<p>Copyright &copy; FootFits 2023</p>
			</div>
		</div>
	</div>
</footer>
</html>
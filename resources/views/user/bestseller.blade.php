
<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Best Sellers</title>

	
</head>

<body  style="background:purple">
	

	<div class="container">

		<div class="row">
			<div class="box" style="border-radius: 10px;">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center"><strong>BEST</strong>sellers</h2>
					<hr>
				</div><br>
			</div>
		</div>

		
	</div>


	
    <footer>
        @include('includes.footer')
    </footer>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		function addToCartOnclick(ProductID) {
			if (confirm("Are you sure you want to add this product to your cart?") == true) {
				window.open("Order.php?ProductID=" + ProductID, "_self", null, true);
			}
		}
	</script>

</body>

</html>
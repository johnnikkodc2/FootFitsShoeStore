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

	
</head>

<body  style="background:purple">


	<div class="container">

		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<div class="table-responsive">
						<h4 style="text-align:center;">Customers</h4>
						<table border="5px" class="table">
							<tr style="text-align: center; color: Black; font-weight: bold;">
								<td>Customer ID</td>
								<td>UserName</td>
								<td>Password</td>
								<td>Firstname</td>
								<td>Middlename</td>
								<td>Lastname</td>
								<td>Address</td>
								<td>Email Address</td>
								<td>Action</td>
							</tr>
						
						
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>

	<footer>
		@include('includes.footer')
	</footer>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		function actionOnclick(Action, CustomerID) {
			if (Action == "Edit") {
				if (confirm("Are you sure you want to edit this information?") == true) {
					window.open("Register.php?ActionType=Edit&Loc=MC&ID=" + CustomerID, "_self", null, true);
				}
			}
			else if (Action == "Delete") {
				if (confirm("Are you sure you want to Delete this information?") == true) {
					window.open("Management_Customers_Action.php?ID=" + CustomerID, "_self", null, true);
				}
			}
		}
	</script>

</body>

</html>
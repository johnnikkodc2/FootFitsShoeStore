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
                    <hr>
                    <h2 class="intro-text text-center">Orders</h2>
                    @if (session('success'))
						<div id="successMessage" style="background-color:#28a745; padding: 15px 15px 15px 15px; border-radius:5px;">
							{{session('success')}}
						</div>
					@endif
                    <hr>
                    <div class="table-responsive">
                        <table border="5px" class="table">
                            <tr style="text-align: center; color: Black; font-weight: bold;">
                                <td>Order ID</td>
                                <td>Customer Name</td>
                                <td>Order Details</td>
                                {{-- <td>Product Name</td>
                                <td>Product Size</td>
                                <td>Product Price</td> --}}
                                <td>Total Amount</td>
                                <td>Date Ordered</td>
                                <td>Shipping Details</td>
                                <td>Order Status</td>
                                <td>Action</td>
                            </tr>
                            @foreach ($orders as $order_item)
                            <tr class="text-center">
                                <td>{{ $order_item->id }}</td>
                                    <td>{{ $order_item->first_name }} {{ $order_item->last_name }}</td>
                                        {{-- <td>{{ $order_item->orderProducts->product->product_name }}</td> --}}
                                        {{-- <td></td>
                                        <td></td>
                                        <td></td> --}}
                                        <td><a href="{{ url('receipt/' . $order_item->id) }}">Click Here</a></td>
                                        <td>${{ $order_item->total_price }}</td>
                                        <td>{{ $order_item->created_at }}</td>
                                            <td>{{ $order_item->address  }}</td>
                                                <td>{{ $order_item->status }}</td>
                                                <td>					
                                                    <a href="{{url('/editorderstatus/edit/'.$order_item->id)}}" class="btn btn-info">
                                                        Edit
                                                    </a>
                                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

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
        function CancelOrderOnclick(ID) {
            if (confirm("Are you sure you want to Delete this order?") == true) {
                window.open("Management_Orders_Action.php?id=" + ID, "", null, true);
            }
        }
    </script>
    <script>
		var successMessage = document.getElementById('successMessage');
		function hideSuccessMessage() {
			successMessage.style.display = 'none';
		}
		setTimeout(hideSuccessMessage, 1500); 
	</script>

</body>

</html>
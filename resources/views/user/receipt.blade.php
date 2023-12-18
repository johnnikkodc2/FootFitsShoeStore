<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <title>Receipt</title>

    <!-- Add your custom styles or link external stylesheet here -->

    <style>
        .container {
            max-width: 800px;
            margin: auto;
        }

        .logo {
            max-width: 100px; /* Adjust as needed */
        }

        .credit-card {
            font-family: 'Courier New', Courier, monospace; /* To maintain the format of the credit card number */
        }

        .shipping-details {
            margin-top: 20px;
        }

        .company-info {
            margin-top: 20px;
        }

        .receipt-info {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Company Information -->
        <div class="company-info">
            <img src="../img/logo.png" alt="Logo" class="logo">
            <p>FootFits Shoe Store</p>
            <p>123 P. Campa Street, Sampaloc, Manila City</p>
        </div>

        <div class="summary">
            <h3>Order Summary</h3>

            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderProducts as $order_item)
                        <tr>    
                            <td class="product-details2">
                                <p>{{ $order_item->product->product_name }}</p>
                            </td>
                            <td>{{ $order_item->product->product_size }}</td>
                            <td>{{ $order_item->product->product_color }}</td>
                            <td>{{ $order_item->price }}</td>
                            <td>{{ $order_item->quantity }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Display Total Price -->
        <p>Total Price: &#8369;{{ $order->total_price }}</p>

        <!-- Credit Card Information -->
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
            <p><strong>Receipt Date:</strong> <span id="receiptDate"></span></p>

        </div>

        <!-- Thank You Message -->
        <br>
        <p>Thank you for your purchase!</p>

        <!-- Add a print or export button -->
        <button onclick="printReceipt()" class="btn btn-primary">Print Receipt</button>
        <button onclick="gohome()" class="btn btn-primary">View Orders</button>
    </div>
    <script>
    	function formatPrice(input) {
			// Remove non-numeric characters
			let value = input.value.replace(/\D/g, '');
	
			// Add commas for every 3 digits
			value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
	
			// Update the input value
			input.value = value;
		}
</script>
    <script>
        // Get the current date
        var currentDate = new Date();
    
        // Format the date (you can customize the format as needed)
        var formattedDate = currentDate.toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
    
        // Display the formatted date in the span with id "receiptDate"
        document.getElementById('receiptDate').textContent = formattedDate;
    </script>
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function printReceipt() {
            window.print();
        }
        function gohome() {
            window.location.href = "{{ route('myorders') }}";
        }
    </script>
</body>

</html>

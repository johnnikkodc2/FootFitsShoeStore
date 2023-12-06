<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <title>Receipt</title>

</head>

<body>
    <div class="container">

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
                    <tr>
                        <td class="product-details2">
                            <p>Product Name</p>
                        </td>
                        <td>12</td>
                        <td>red</td>
                        <td>$2222</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <!-- Display Total Price -->
        <p>Total Price: $1111</p>

        <!-- Shipping Details -->
        <h3>Shipping Details</h3>
        <p><strong>Full Name:</strong> John Doe</p>
        <p><strong>Address:</strong> 123 Main St</p>
        <p><strong>City:</strong> Example City</p>
        <p><strong>ZIP Code:</strong> 12345</p>

        <!-- Add a print or export button -->
        <button onclick="printReceipt()" class="btn btn-primary">Print Receipt</button>
    </div>

    <footer class="footer">
        @include('includes.footer')
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function printReceipt() {
            window.print();
        }
    </script>
</body>

</html>

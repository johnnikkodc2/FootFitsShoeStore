<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FootFits</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body style="background: color">
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Product Brand</th>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $cart_item)
                <tr>
                    <td>{{ $cart_item->product->product_brand }}</td>
                    <td>{{ $cart_item->product->product_name }}</td>
                    <td>{{ $cart_item->product->product_size }}</td>
                    <td>{{ $cart_item->product->product_color }}</td>
                    <td>{{ $cart_item->quantity }}</td>
                    <td>{{ $cart_item->price }}</td>
                    <td>
                        <a class="btn btn-danger" onclick="deleteCartItem({{ $cart_item->id }})">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Checkout Now button -->
        <div class="checkout-button">
            <a class="btn btn-primary" onclick="checkoutNow()">Checkout Now</a>
        </div>
    </div>

    <footer>
        @include('includes.footer')
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function deleteCartItem(cartItemId) {
            // Implement logic to delete the cart item
            console.log("Deleting cart item with ID: " + cartItemId);
        }

        function checkoutNow() {
            // Implement logic for checkout
            console.log("Checking out now");
        }
    </script>
</body>

</html>

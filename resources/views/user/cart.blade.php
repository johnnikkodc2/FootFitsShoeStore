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
    <style>
        .thumbnail {
            transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out, opacity 0.3s ease-in-out;
            background-color: #FDB927;
            opacity: 0.8;
        }

        .thumbnail:hover {
            transform: scale(1.1);
            cursor: pointer;
            background-color: #f3d634;
            opacity: 1;
        }
    </style>
</head>

<body style="background: purple">
    <div class="container">
        @foreach ($cart as $cart_item)
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail" onclick="redirectToDetails({{ $cart_item->id }})">
                <h4 style="text-align: center;">{{ $cart_item->product->product_brand }}</h4>
                {{-- <img style="border: 2px solid gray; border-radius: 10px; height: 229px; width: 298px;" src="{{ asset('img/' . $cart_item->product->product_images[0]) }}" alt=""> --}}
                <div class="caption">
                    <p><strong>Product Name:</strong> {{ $cart_item->product->product_name }}</p>
                    <p><strong>Size:</strong> {{ $cart_item->product->product_size }}</p>
                    <p><strong>Color:</strong> {{ $cart_item->product->product_color }}</p>
                    <p><strong>Quantity: {{ $cart_item->quantity }}</strong></p>
                    <p><strong>Total Price:</strong> {{ $cart_item->price }}</p>
                </div>
                <center><a style="margin-bottom: 5px;" class="btn btn-primary" onclick="addToCartOnclick({{ $cart_item->id }})">Checkout</a></center>
                <center><a style="margin-bottom: 5px;" class="btn btn-primary" onclick="addToCartOnclick({{ $cart_item->id }})">Delete</a></center>
            </div>
        </div>
        @endforeach
    </div>

    <footer>
        @include('includes.footer')
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function redirectToDetails(productId) {
            // Redirect to the product details page with the productId
            window.open("productDetails/details/" + productId, "_self", null, true);
        }

        function ManagementOnclick() {
            if (confirm("Only Administrators are allowed on this page. Please log in as an Administrator.") == true) {
                window.open("Login.php?Role=Admin", "_self", null, true);
            }
        }

        function addToCartOnclick(ProductID) {
            if (confirm("Are you sure you want to add this product to your cart?") == true) {
                window.open("Order.php?ProductID=" + ProductID, "_self", null, true);
            }
        }
    </script>
</body>

</html>
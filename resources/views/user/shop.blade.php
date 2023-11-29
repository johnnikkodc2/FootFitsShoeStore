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
        body {
            background: white;
        }

        .thumbnail {
            transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out, opacity 0.3s ease-in-out;
            background-color: white;
            opacity: 0.8;
            margin-bottom: 20px;
            padding: 15px;
            text-align: center;
            height: 550px;
        }

        .thumbnail:hover {
            transform: scale(1.01);
            cursor: pointer;
            background-color: #87CEEB;
            opacity: 1;
        }

        .thumbnail img {
            border: 2px solid gray;
            border-radius: 10px;
            height: 229px;
            width: 298px;
            margin-bottom: 10px;
        }

        .container {
            padding-top: 20px; /* Add the desired padding-top value */
        }
    </style>
</head>

<body>
    <div class="container">
        @php
        $count = 0;
        @endphp
        @foreach ($products as $product)
        @if ($count % 3 == 0)
        <div class="row">
        @endif
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail" onclick="redirectToDetails({{ $product->id }})">
                <h4>{{ $product->product_brand }}</h4>
                <img src="{{ asset('img/' . $product->product_images[0]) }}" alt="">
                <div class="caption">
                    <p><strong>Product Name:</strong> {{ $product->product_name }}</p>
                    <p><strong>Size Available:</strong> {{ $product->product_size }}</p>
                    <p><strong>Color:</strong> {{ $product->product_color }}</p>
                    <p><strong>Price:</strong> {{ $product->product_price }}</p>
                </div>
                <center><a class="btn btn-primary" onclick="addToCartOnclick({{ $product->id }})">Add to Cart</a></center>
            </div>
        </div>
        @php
        $count++;
        @endphp
        @if ($count % 3 == 0 || $loop->last)
        </div>
        @endif
        @endforeach
    </div>

    <footer>
        @include('includes.footer')
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function redirectToDetails(productId) {
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

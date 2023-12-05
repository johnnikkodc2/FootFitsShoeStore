<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">

    <title>FootFits</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Category Filter Dropdown -->
                <div class="btn-group mb-2">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Lifestyle</a>
                        <a class="dropdown-item" href="#">Running</a>
                        <a class="dropdown-item" href="#">Basketball</a>
                    </div>
                </div>

                <!-- Sorting Options Dropdown -->
                <div class="btn-group mb-2">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort Price
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#" onclick="sortProducts('asc')">Price:High-Low</a>
                        <a class="dropdown-item" href="#" onclick="sortProducts('desc')">Price:Low-High</a>
                    </div>
                </div>
            </div>
            @foreach ($products as $product)
            <div class="col-sm-6 col-md-4">
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
            @endforeach
        </div>
    </div>

    <footer>
        @include('includes.footer')
    </footer>

    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

        function sortProducts(order) {
            // Implement sorting logic here
            console.log("Sort by price " + order);
        }
    </script>
</body>

</html>

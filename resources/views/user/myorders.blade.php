<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>My Orders</title>
</head>

<body>
    <div class="container">

        <h2>My Orders</h2>

        <!-- Order List -->
        <div class="order-list">
            <!-- Sample order entries with dummy data -->
            <div class="order-card">
                <div class="card-body">
                    <h3 class="card-title">Order #12345</h3>
                    <p class="card-text">Date: January 1, 2023</p>
                    <p class="card-text">Total Price: $1111</p>
                    <p class="card-text">Status: Shipped</p>
                </div>
            </div>
            <div class="order-card">
                <div class="card-body">
                    <h3 class="card-title">Order #67890</h3>
                    <p class="card-text">Date: February 15, 2023</p>
                    <p class="card-text">Total Price: $1500</p>
                    <p class="card-text">Status: Delivered</p>
                </div>
            </div>
            <div class="order-card">
                <div class="card-body">
                    <h3 class="card-title">Order #13579</h3>
                    <p class="card-text">Date: March 10, 2023</p>
                    <p class="card-text">Total Price: $800</p>
                    <p class="card-text">Status: Processing</p>
                </div>
            </div>
            <div class="order-card">
                <div class="card-body">
                    <h3 class="card-title">Order #24680</h3>
                    <p class="card-text">Date: April 5, 2023</p>
                    <p class="card-text">Total Price: $1200</p>
                    <p class="card-text">Status: Shipped</p>
                </div>
            </div>
            <div class="order-card">
                <div class="card-body">
                    <h3 class="card-title">Order #98765</h3>
                    <p class="card-text">Date: May 20, 2023</p>
                    <p class="card-text">Total Price: $900</p>
                    <p class="card-text">Status: Delivered</p>
                </div>
            </div>
        </div>

    </div>

    <footer>
        @include('includes.footer')
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>

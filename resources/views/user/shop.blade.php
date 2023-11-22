<?php session_start(); ?>
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
   
</head>

<body  style="background:purple">
   

    <div class="container">
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <h4 style="text-align: center;">Nike</h4>
                <img style="border: 2px solid gray; border-radius: 10px; height: 229px; width: 298px;" src="img/shoe1.jpg" alt="">
                <div class="caption">
                    <p><strong>Product Name:</strong> Lebron 20</p>
                    <p><strong>Size Available:</strong> 12</p>
                    <p><strong>Colors Available:</strong> Time Machine</p>
                    <p><strong>P 9000.00</strong></p>
                </div>
                <center><a style="margin-bottom: 5px;" class="btn btn-primary">Add to Cart</a></center>
            </div>
        </div>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <h4 style="text-align: center;">Nike</h4>
                <img style="border: 2px solid gray; border-radius: 10px; height: 229px; width: 298px;" src="img/shoe1.jpg" alt="">
                <div class="caption">
                    <p><strong>Product Name:</strong> Lebron 20</p>
                    <p><strong>Size Available:</strong> 12</p>
                    <p><strong>Colors Available:</strong> Time Machine</p>
                    <p><strong>P 9000.00</strong></p>
                </div>
                <center><a style="margin-bottom: 5px;" class="btn btn-primary">Add to Cart</a></center>
            </div>
        </div>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <h4 style="text-align: center;">Nike</h4>
                <img style="border: 2px solid gray; border-radius: 10px; height: 229px; width: 298px;" src="img/shoe1.jpg" alt="">
                <div class="caption">
                    <p><strong>Product Name:</strong> Lebron 20</p>
                    <p><strong>Size Available:</strong> 12</p>
                    <p><strong>Colors Available:</strong> Time Machine</p>
                    <p><strong>P 9000.00</strong></p>
                </div>
                <center><a style="margin-bottom: 5px;" class="btn btn-primary">Add to Cart</a></center>
            </div>
        </div>
        

    

    </div>

    <footer>
        @include('includes.footer')
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function ManagementOnclick() {
            if (confirm("Only Administrators are allowed in this page, Please Login as an Administrator.") == true) {
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
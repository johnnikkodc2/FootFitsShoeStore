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
                    <hr>
                    <div class="table-responsive">
                        <table border="5px" class="table">
                            <tr style="text-align: center; color: Black; font-weight: bold;">
                                <td>Order ID</td>
                                <td>Customer ID</td>
                                <td>Product Name</td>
                                <td>Product Brand</td>
                                <td>Product Size</td>
                                <td>Product Color</td>
                                <td>Product Price</td>
                                <td>Date Ordered</td>
                                <td>Action</td>
                            </tr>

                            
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
        function CancelOrderOnclick(ID) {
            if (confirm("Are you sure you want to Delete this order?") == true) {
                window.open("Management_Orders_Action.php?id=" + ID, "", null, true);
            }
        }
    </script>

</body>

</html>
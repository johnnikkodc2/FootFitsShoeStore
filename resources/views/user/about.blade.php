
<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About</title>

</head>

<body style="margin-top: 90px;">
  
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">About
                        <strong>FootFits</strong>
                    </h2>
                    <hr>
                </div>
                <div >
                    <img class="img-responsive mx-auto d-block img-border-left" src="img/logo.png" alt="">
                </div>
                
                <div class="intro-text text-center text-justify">
                    <p>Step into a world where finding the perfect pair of shoes is no longer a challenge for those with
                        larger foot sizes. Welcome to FootFits, where footwear meets perfection and inclusivity reigns
                        supreme. At FootFits, we are dedicated to providing an unparalleled shopping experience for
                        individuals with larger shoe sizes. Catering to both men and women, our expansive collection
                        showcases sizes starting from 12 US for men and 8 US for women, ensuring that nobody has to
                        compromise on style or comfort due to limited options.
                    </p>
                    <p>Customers, the heartbeat of FootFits, are granted a range of versatile features to enhance their
                        shopping journey. Upon logging into their accounts, customers gain the ability to effortlessly
                        explore our diverse product range. The power to view, post, and purchase footwear is at your
                        fingertips. Whether you're hunting for a sleek pair of sneakers, elegant dress shoes, or
                        anything in between, FootFits has you covered.
                    </p>
                    <p>Navigate through our vast inventory with ease, thanks to our advanced filtering system. Refine
                        your search by gender, size, footwear type, brand, and price, tailoring the results to match
                        your unique preferences. This intelligent system ensures that finding the perfect fit has never
                        been more convenient.
                    </p>
                    <p>At FootFits, we're more than just a footwear retailer; we're a community united by a shared
                        passion for great shoes that fit perfectly. Our commitment to providing a user-friendly
                        platform, a broad selection of styles, and a seamless shopping experience sets us apart in the
                        world of online footwear retail.
                    </p>
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        @include('includes.footer')
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>

        function ManagementOnclick() {
            if (confirm("Only Administrators are allowed in this page, Please Login as an Administrator.") == true) {
                window.open("Login.php?Role=Admin", "_self", null, true);
            }
        }

    </script>

</body>

</html>
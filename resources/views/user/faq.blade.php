
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
  
    <div class="container mt-5">
        <div class="col-lg-12">
            <hr>
            <hr>
            <h2 class="intro-text text-center">
                <strong>FAQS</strong>
            </h2>
            <hr>
        </div>

        <div class="accordion" id="faqAccordion">

            <!-- FAQ Item 1 -->
            <div class="card">
                <div class="card-header" id="faqHeading1">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                            How do I place an order?
                        </button>
                    </h5>
                </div>
                <div id="faqCollapse1" class="collapse show" aria-labelledby="faqHeading1" data-parent="#faqAccordion">
                    <div class="card-body">
                        Place your order by navigating to the product page, selecting your size, and clicking on the 'Add to Cart' button. Then proceed to the checkout page to complete your order.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="card">
                <div class="card-header" id="faqHeading2">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse2" aria-expanded="true" aria-controls="faqCollapse2">
                            How can I track my order?
                        </button>
                    </h5>
                </div>
                <div id="faqCollapse2" class="collapse" aria-labelledby="faqHeading2" data-parent="#faqAccordion">
                    <div class="card-body">
                        Once your order is shipped, you will receive a tracking number via email. You can use this tracking number to monitor the status of your order on the carrier's website.
                    </div>
                </div>
            </div>

            <!-- Add more FAQ items as needed -->

        </div>
    </div>


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
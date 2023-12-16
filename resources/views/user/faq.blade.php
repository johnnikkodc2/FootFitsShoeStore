
<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FAQ</title>
<style>.card-header button.btn-link {
    color: black;
}</style>
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
                            How do I customize my order with a specific size and quantity?
                        </button>
                    </h5>
                </div>
                <div id="faqCollapse1" class="collapse show" aria-labelledby="faqHeading1" data-parent="#faqAccordion">
                    <div class="card-body">
                        To customize your order, follow these steps:
                        <ol>
                            <li>Navigate to the product page of the item you want to purchase.</li>
                            <li>Select your desired size from the available options.</li>
                            <li>Adjust the quantity as needed.</li>
                            <li>Click on the 'Add to Cart' button to include the customized product in your shopping cart.</li>
                            <li>Proceed to the checkout page to review and complete your order.</li>
                        </ol>
                    </div>
                </div>
            </div>
            

            <!-- FAQ Item 2 -->
<div class="card">
    <div class="card-header" id="faqHeading2">
        <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                What payment methods do you accept?
            </button>
        </h5>
    </div>
    <div id="faqCollapse2" class="collapse" aria-labelledby="faqHeading2" data-parent="#faqAccordion">
        <div class="card-body">
            We accept various payment methods, including credit/debit cards, online payment gateways, and other secure payment options. Visit our payment page for more details.
        </div>
    </div>
</div>

<!-- FAQ Item 3 -->
<div class="card">
    <div class="card-header" id="faqHeading3">
        <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                Can I modify or cancel my order?
            </button>
        </h5>
    </div>
    <div id="faqCollapse3" class="collapse" aria-labelledby="faqHeading3" data-parent="#faqAccordion">
        <div class="card-body">
            Unfortunately, orders cannot be modified or canceled once they are placed to ensure quick processing and delivery. Please review your order carefully before confirming.
        </div>
    </div>
</div>

<!-- FAQ Item 4 -->
<div class="card">
    <div class="card-header" id="faqHeading4">
        <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                How can I track my order?
            </button>
        </h5>
    </div>
    <div id="faqCollapse4" class="collapse" aria-labelledby="faqHeading4" data-parent="#faqAccordion">
        <div class="card-body">
            Once your order is shipped, you will receive a tracking number via email. You can use this number to track the status and location of your package.
        </div>
    </div>
</div>

<!-- FAQ Item 5 -->
<div class="card">
    <div class="card-header" id="faqHeading5">
        <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                What is your return policy?
            </button>
        </h5>
    </div>
    <div id="faqCollapse5" class="collapse" aria-labelledby="faqHeading5" data-parent="#faqAccordion">
        <div class="card-body">
            We offer a hassle-free return policy. If you're not satisfied with your purchase, you can return it within a specified period. Check our return policy for more details.
        </div>
    </div>
</div>

<!-- FAQ Item 6 -->
<div class="card">
    <div class="card-header" id="faqHeading6">
        <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                Do you provide nationwide shipping within the Philippines?
            </button>
        </h5>
    </div>
    <div id="faqCollapse6" class="collapse" aria-labelledby="faqHeading6" data-parent="#faqAccordion">
        <div class="card-body">
            Currently, we only offer shipping services within the Philippines. We do not provide international shipping options. You can proceed with the checkout process, and during that time, you can select your specific location within the Philippines to view shipping options and costs.
        </div>
    </div>
</div>


<!-- FAQ Item 7 -->
<div class="card">
    <div class="card-header" id="faqHeading7">
        <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
                Are the shoes on FootFits authentic?
            </button>
        </h5>
    </div>
    <div id="faqCollapse7" class="collapse" aria-labelledby="faqHeading7" data-parent="#faqAccordion">
        <div class="card-body">
            Absolutely! We guarantee the authenticity of all our products. FootFits only sells genuine, brand-name footwear.
        </div>
    </div>
</div>

<!-- FAQ Item 8 -->
<div class="card">
    <div class="card-header" id="faqHeading8">
        <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse8" aria-expanded="false" aria-controls="faqCollapse8">
                How can I determine my shoe size?
            </button>
        </h5>
    </div>
    <div id="faqCollapse8" class="collapse" aria-labelledby="faqHeading8" data-parent="#faqAccordion">
        <div class="card-body">
            Refer to our size chart available on the product pages to find the most accurate size for your feet. If you have further questions, our customer support team is happy to assist.
        </div>
    </div>
</div>

<!-- FAQ Item 9 -->
<div class="card">
    <div class="card-header" id="faqHeading9">
        <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse9" aria-expanded="false" aria-controls="faqCollapse9">
                Can I exchange my shoes for a different size or style?
            </button>
        </h5>
    </div>
    <div id="faqCollapse9" class="collapse" aria-labelledby="faqHeading9" data-parent="#faqAccordion">
        <div class="card-body">
            Yes, we offer exchanges within a specified period. Check our exchange policy for more information and instructions on how to proceed.
        </div>
    </div>
</div>

<!-- FAQ Item 10 -->
<div class="card">
    <div class="card-header" id="faqHeading10">
        <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse10" aria-expanded="false" aria-controls="faqCollapse10">
                How do I contact FootFits customer support?
            </button>
        </h5>
    </div>
    <div id="faqCollapse10" class="collapse" aria-labelledby="faqHeading10" data-parent="#faqAccordion">
        <div class="card-body">
            You can reach our customer support team through the "Contact Us" page on our website or by sending an email to support@footfits.com. We are here to assist you with any inquiries or concerns.
        </div>
    </div>
</div>

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
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

<body style="margin-top: 100px;">
    <div class="col-lg-12">
        <hr>
        <hr>
        <h2 class="intro-text text-center">
            <strong>Products</strong>
        </h2>
        <hr>
    </div>
    
    <main class="main bd-grid">
        @foreach ($products as $product)
        <article class="card" onclick="redirectToDetails({{ $product->id }})">
            <div class="card__img">
                <img src="{{ asset('img/' . $product->product_images[0]) }}" alt="" class="fixed-size-image">
            </div>
            <div class="card__name">
                <p>{{ $product->product_name }}</p>
            </div>
            <div class="card__precis">
                <a href="" class="card__icon">{{ $product->product_size }}</a>
                <div>
                    <span class="card__preci card__preci--now">&#8369;{{ number_format($product->product_price) }}</span>
                    <span class="card__preci card__preci--before">Available: {{ $product->product_quantity }}</span>
                </div>
                <a class="card__icon"></a>
            </div>
        </article>
    @endforeach
    

     
    </main>
    <footer>
        @include('includes.footer')
    </footer>

    <!-- ICONS -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script>
		function formatPrice(input) {
			// Remove non-numeric characters
			let value = input.value.replace(/\D/g, '');
	
			// Add commas for every 3 digits
			value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
	
			// Update the input value
			input.value = value;
		}
		$(document).ready(function () {

        $('form').submit(function (e) {
            e.preventDefault();

       
            toastr.success('Form submitted successfully!', 'Success');

            $(this)[0].reset();
        });
    });
	</script>
    <script>
        function redirectToDetails(productId) {
            window.open("productDetails/details/" + productId, "_self", null, true);
        }

        </script>
</body>


</html>

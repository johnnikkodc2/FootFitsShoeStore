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

    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
</head>

<body style="margin-top: 100px;">
    <div class="container-fluid mt-5">
        <div class="col-lg-12">
            <hr>
            <hr>
            <h2 class="intro-text text-center">
                <strong>Cart</strong>
            </h2>
            <hr>
        </div>
        <div class="row justify-content-center">
            <form method="post" action="{{ route('checkout.update_cart') }}" class="col-md-8">
                @csrf
                @if (session('success'))
                    <div class="alert my-4 alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                @endif
                <div class="table-responsive">
                    <table id="myTable" class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th class="text-right"><span id="amount" class="amount">Amount</span> </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $cart_item)
                            <input type="hidden" name="cart_id[]" value={{ $cart_item->id }} />
                            <tr>
                                <td>
                                    <div class="product-img">
                                        <div class="img-prdct"><img src={{ asset('img/' . $cart_item->product->product_images[0] )}}></div>
                                    </div>
                                </td>
                                <td>
                                    <p>{{ $cart_item->product->product_name }}</p>
                                </td>
                                <td>
                                    <div class="button-container">
                                        <button class="cart-qty-minus" type="button" value="-">-</button>
                                        <input type="text" name="qty[]" min="1" max={{ $cart_item->product->product_quantity }} class="qty form-control" value={{ $cart_item->quantity }} />
                                        <button class="cart-qty-plus" type="button" value="+">+</button>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" value={{ $cart_item->product->product_price }} class="price form-control" disabled>
                                </td>
                                <td align="right">$ <span id="amount" class="amount">0</span></td>
                                <td>
                                    <a class="btn" onclick="deleteCartItem({{ $cart_item->id }})" >
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4"></td><td align="right"><strong>TOTAL = &#8369;  <span id="total" class="total">0</span></strong></td>
                            </tr>
                        </tfoot>
                        
                    </table>
                  
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Continue to checkout</button>
            </form>
        </div>
    </div>

    <footer>
        @include('includes.footer')
    </footer>

    <script>
    	function formatPrice(input) {
			// Remove non-numeric characters
			let value = input.value.replace(/\D/g, '');
	
			// Add commas for every 3 digits
			value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
	
			// Update the input value
			input.value = value;
		}
</script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function deleteCartItem(cartItemId) {
            // Implement logic to delete the cart item
            console.log("Deleting cart item with ID: " + cartItemId);

            var isConfirmed = confirm("Are you sure you want to delete this cart item?");

            if (isConfirmed) {
                window.location.href = "{{ url('productDetails/delete_cart/') }}" + '/' + cartItemId;
            }
        }

        function checkoutNow() {
            window.location.href = "{{ route('checkout') }}";
        }
    </script>
    <script>
$(document).ready(function(){
  	update_amounts();
  	$('.qty, .price').on('keyup keypress blur change', function(e) {
	  	update_amounts();
  	});
});
function update_amounts(){
	var sum = 0.0;
	  	$('#myTable > tbody  > tr').each(function() {
			var qty = $(this).find('.qty').val();
		  	var price = $(this).find('.price').val();
		  	var amount = (qty*price)
		  	sum+=amount;
		  	$(this).find('.amount').text(''+amount);
	  	});
	$('.total').text(sum);
}



//----------------for quantity-increment-or-decrement-------
var incrementQty;
var decrementQty;
var plusBtn  = $(".cart-qty-plus");
var minusBtn = $(".cart-qty-minus");
var incrementQty = plusBtn.click(function() {
	var $n = $(this)
		.parent(".button-container")
		.find(".qty");
	$n.val(Number($n.val())+1 );
	update_amounts();
});

var decrementQty = minusBtn.click(function() {
		var $n = $(this)
		.parent(".button-container")
		.find(".qty");
	var QtyVal = Number($n.val());
	if (QtyVal > 0) {
		$n.val(QtyVal-1);
	}
	update_amounts();
});





</script>
</body>

</html>

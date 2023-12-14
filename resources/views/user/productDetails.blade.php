<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('css/productdetails.css') }}">
    <title>Product Details</title>
</head>

<body style="margin-top: 100px;">
    <div class = "card-wrapper">
        <div class = "card">
          <!-- card left -->
          <div class="product-imgs">
            <div class="img-display">
                <div class="img-showcase">
                    @if (!empty($products->product_images))
                        @foreach ($products->product_images as $index => $image)
                            <img src="{{ asset('img/' . $image) }}" alt="shoe image">
                        @endforeach
                    @else
                        <img src="{{ asset('img/logo.png') }}" alt="shoe image">
                    @endif
                </div>
            </div>
            <div class="img-select">
                @if (!empty($products->product_images))
                    @foreach ($products->product_images as $index => $image)
                        <div class="img-item">
                            <a href="#" data-id="{{ $index + 1 }}">
                                <img src="{{ asset('img/' . $image) }}" alt="shoe image" style="max-width: 50px; max-height: 50px;">
                            </a>
                        </div>
                    @endforeach
                @else
                    <div class="img-item">
                        <a href="#" data-id="1">
                            <img src="{{ asset('img/logo.png') }}" alt="shoe image" style="max-width: 50px; max-height: 50px;">
                        </a>
                    </div>
                @endif
            </div>
            
        </div>
        
          <!-- card right -->
          <div class = "product-content">
            <h2 class = "product-title">{{$products->product_name}}</h2>

        
            <div class = "product-price">

              <p class = "new-price">Price: <span>&#8369;{{number_format($products->product_price)}}</span></p>
            </div>
      
            <div class = "product-detail">
              <h2>Description: </h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
            
              <ul>
                <li>Color: <span>{{$products->product_color}}</span></li>
                <li>Available: <span>{{ $products->product_quantity }}</span></li>
                <li>Category: <span>{{$products->product_category}}</span></li>
                <li>Shipping Area: <span>Nationwide</span></li>
                <li>Shipping Fee: <span>Free</span></li>
              </ul>
            </div>
      
            <div class = "purchase-info">
              <input type = "number" min = "0" value = "1">
              
              <button type = "button" class = "btn">
                Add to Cart <i class = "fas fa-shopping-cart"></i>
              </button>
           
            </div>
      
            <div class = "social-links">
              <p>Share At: </p>
              <a href = "#">
                <i class = "fab fa-facebook-f"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-twitter"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-instagram"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-whatsapp"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-pinterest"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

    <footer style="margin-top: 20px;">
        @include('includes.footer')
    </footer>

  
</body>
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
<script>
    const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);
</script>

</html>

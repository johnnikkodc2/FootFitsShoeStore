<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Foot Fits</title>
</head>
@include('includes.header')
<body style="margin-top: 90px;">

    <div class="slider" >
        <div class="sliderWrapper">
            <div class="sliderItem" >
                <img src="../img/nb1906.png" alt="" style="width: 900px; transform: rotate(30deg);
                z-index: 1; -webkit-filter: drop-shadow(5px 5px 5px #000000);
        filter: drop-shadow(5px 5px 5px #000000);">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">YOUR ULTIMATE</br> DESTINATION</br>FOR STYLISH  </br> AND COZY </br> FOOTWEAR</h1>
                <a href="{{ url('/shop') }}">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem" >
                <img src="https://raw.githubusercontent.com/ZeroOctave/ZeroOctave-Javascript-Projects/main/assets/Images/sneaker-images/jordan.png" alt="" class="sliderImg"  >
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">AIR JORDAN</br> NEW</br>SEASON</h1>
                <h2 class="sliderPrice">$150</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
        </div>
    </div>

     <div class="features">
        <div class="feature">
            <img src="https://raw.githubusercontent.com/ZeroOctave/ZeroOctave-Javascript-Projects/main/assets/Images/sneaker-images/shipping.png" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDesc">Free nationwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img src="https://raw.githubusercontent.com/ZeroOctave/ZeroOctave-Javascript-Projects/main/assets/Images/sneaker-images/return.png" class="featureIcon">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDesc">Not valid for self-damage</span>
        </div>
        <div class="feature">
            <img src="https://raw.githubusercontent.com/ZeroOctave/ZeroOctave-Javascript-Projects/main/assets/Images/sneaker-images/gift.png" class="featureIcon">
            <span class="featureTitle">Christmas Gift</span>
            <span class="featureDesc">Buy shoes from us and deliver to your special someone.</span>
        </div>
        <div class="feature">
            <img src="https://raw.githubusercontent.com/ZeroOctave/ZeroOctave-Javascript-Projects/main/assets/Images/sneaker-images/contact.png" class="featureIcon">
            <span class="featureTitle">CONTACT US!</span>
            <span class="featureDesc">Footfits@gmail.com  0917-283-8821</span>
        </div>
    </div> 

    <div class="product" id="product" >
        <img src="https://raw.githubusercontent.com/ZeroOctave/ZeroOctave-Javascript-Projects/main/assets/Images/sneaker-images/air.png" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle" >AIR FORCE</h1>
            <h2 class="productPrice">₱6,995</h2>
            <p class="productDesc">The radiance lives on in the Nike Air Force 1, the basketball original that puts a fresh spin on what you know best</p>
            <div class="colors">
                <div class="color"></div>

            </div>

            <button class="productButton">BUY NOW !</button>
        </div>

        <div class="payment" >
            <h1 class="payTitle">Personal Information</h1>
            <label>Name and Surname</label>
            <input type="text" placeholder="John Doe" class="payInput">
            <label>Phone Number</label>
            <input type="text" placeholder="+1 234 5678" class="payInput" >
            <label>Address</label>
            <input type="text" placeholder="Elton St 21 22-145" class="payInput">
            <h1 class="payTitle">Card Information</h1>
            <div class="cardIcons" >
                <img src="https://raw.githubusercontent.com/ZeroOctave/ZeroOctave-Javascript-Projects/main/assets/Images/sneaker-images/visa.png" width="40" alt="" class="cardIcon" >
                <img src="https://raw.githubusercontent.com/ZeroOctave/ZeroOctave-Javascript-Projects/main/assets/Images/sneaker-images/master.png" width="40" alt="" class="cardIcon" >
            </div>
            <input type="password" class="payInput" placeholder="Card Number" >
            <div class="cardInfo" >
                <input type="text" placeholder="mm" class="payInput sm">
                <input type="text" placeholder="yyyy" class="payInput sm">
                <input type="text" placeholder="cvv" class="payInput sm">
            </div>
            <button class="payButton" >Checkout !</button>
            <span class="close">X</span>
        </div>
    </div> 

    <div class="gallery" >
        <div class="galleryItem">
            <h1 class="galleryTitle" >Stride Elegance</h1>
            <img src="https://images.pexels.com/photos/9295809/pexels-photo-9295809.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImg">
        </div>
        <div class="galleryItem">
            <img src="https://images.pexels.com/photos/1040427/pexels-photo-1040427.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImg">
            <h1 class="galleryTitle">Footwear Fantasy</h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Step Glamour</h1>
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImg">
        </div>
    </div>

    <div class="newSeason">
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/4753986/pexels-photo-4753986.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <h1 class="nsTitleSm">CHRISTMAS SEASON</h1>
            <h3 class="nsTitle">New Season</h3>
            <h3 class="nsTitle">New Collection</h3>
            <a href="{{ url('/shop') }}">
                <button class="nsButton">CHOOSE YOUR STYLE</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="nsImg">
        </div>
    </div> 
  

  </body>


  <footer>
    @include('includes.footer')
</footer>
</html>
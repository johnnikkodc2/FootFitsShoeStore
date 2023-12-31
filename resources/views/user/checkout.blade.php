<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <title>Checkout</title>

</head>

<body style="margin-top: 90px;">
    <div class="container">
        <div class="col-lg-12">
            <hr>
            <hr>
            <h2 class="intro-text text-center">
                <strong>Checkout</strong>
            </h2>
            <hr>
        </div>
      
        <div class="row">
          <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-muted">Your cart</span>
              <span class="badge badge-secondary badge-pill">{{ count($cart) }}</span>
            </h4>
            <ul class="list-group mb-3">
              @php
                $totalPrice = 0;
              @endphp
              @foreach ($cart as $cart_item)
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">{{ $cart_item->product->product_name }}</h6>
                    <small class="text-muted">{{ $cart_item->product->product_brand }}</small>
                  </div>
                  <span class="text-muted">{{ $cart_item->price }}</span>
                </li>
                @php
                    $totalPrice += $cart_item->price;
                @endphp
              @endforeach

              <li class="list-group-item d-flex justify-content-between">
                <span>Total (PHP)</span>
                <strong>&#8369;<span id="total" class="total">{{ $totalPrice }}</span></strong>
              </li>
            </ul>
      
           
          </div>
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form method="post" action="{{ route('create_order') }}" class="needs-validation" novalidate>
              @csrf
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">First name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="{{ old('first_name') }}" name="first_name" required>
                  @if ($errors->has('first_name'))
                    @foreach ($errors->get('first_name') as $error)
                        <div class="alert alert-danger">
                          {{ $error }}
                        </div>
                    @endforeach
                  @endif
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="{{ old('last_name') }}" name="last_name" required>
                  @if ($errors->has('last_name'))
                    @foreach ($errors->get('last_name') as $error)
                        <div class="alert alert-danger">
                          {{ $error }}
                        </div>
                    @endforeach
                  @endif
                </div>
              </div>
      
         
      
              <div class="mb-3">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com">
                @if ($errors->has('email'))
                    @foreach ($errors->get('email') as $error)
                        <div class="alert alert-danger">
                          {{ $error }}
                        </div>
                    @endforeach
                  @endif
              </div>
      
              <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="1234 Main St" required>
                @if ($errors->has('address'))
                    @foreach ($errors->get('address') as $error)
                        <div class="alert alert-danger">
                          {{ $error }}
                        </div>
                    @endforeach
                  @endif
              </div>
      
              <div class="mb-3">
                <label for="address2">Address 2 </label>
                <input type="text" class="form-control" id="address2" name="address_2" value="{{ old('address_2') }}" placeholder="Apartment or suite" required>
                @if ($errors->has('address_2'))
                  @foreach ($errors->get('address_2') as $error)
                      <div class="alert alert-danger">
                        {{ $error }}
                      </div>
                  @endforeach
                @endif
              </div>
      
              <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="region">Region</label>
                    <select name="region" class="custom-select d-block w-100" id="region" required>
                        <option value="">Choose...</option>
                        <option value="NCR">National Capital Region (NCR)</option>
                        <option value="CAR">Cordillera Administrative Region (CAR)</option>
                        <option value="Region1">Ilocos Region (Region I)</option>
                        <option value="Region2">Cagayan Valley (Region II)</option>
                        <option value="Region3">Central Luzon (Region III)</option>
                        <option value="Region4A">CALABARZON (Region IV-A)</option>
                        <option value="Region4B">MIMAROPA (Region IV-B)</option>
                        <option value="Region5">Bicol Region (Region V)</option>
                        <option value="Region6">Western Visayas (Region VI)</option>
                        <option value="Region7">Central Visayas (Region VII)</option>
                        <option value="Region8">Eastern Visayas (Region VIII)</option>
                        <option value="Region9">Zamboanga Peninsula (Region IX)</option>
                        <option value="Region10">Northern Mindanao (Region X)</option>
                        <option value="Region11">Davao Region (Region XI)</option>
                        <option value="Region12">SOCCSKSARGEN (Region XII)</option>
                        <option value="Region13">Caraga (Region XIII)</option>
                        <option value="BARMM">Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)</option>
                    </select>
                    @if ($errors->has('region'))
                      @foreach ($errors->get('region') as $error)
                          <div class="mt-2 alert alert-danger">
                            {{ $error }}
                          </div>
                      @endforeach
                    @endif
                </div>
                <div class="col-md-4 mb-3">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" id="city" value="{{ old('city') }}" placeholder="Enter City" required>
                    @if ($errors->has('city'))
                      @foreach ($errors->get('city') as $error)
                          <div class="mt-2 alert alert-danger">
                            {{ $error }}
                          </div>
                      @endforeach
                    @endif
                </div>
                
                <div class="col-md-3 mb-3">
                  <label for="zip">Zip</label>
                  <input type="text" name="zip" class="form-control" id="zip" value="{{ old('zip') }}" placeholder="" required>
                  @if ($errors->has('zip'))
                    @foreach ($errors->get('zip') as $error)
                        <div class="mt-2 alert alert-danger">
                          {{ $error }}
                        </div>
                    @endforeach
                  @endif
                </div>
              </div>
          
             
              <hr class="mb-4">
      
              <h4 class="mb-3">Payment</h4>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="cc-name">Name on card</label>
                      <input type="text" name="payment_namecard" class="form-control" id="cc-name" placeholder="" value="{{ old('payment_namecard') }}" required>
                      @if ($errors->has('payment_namecard'))
                        @foreach ($errors->get('payment_namecard') as $error)
                            <div class="mt-2 alert alert-danger">
                              {{ $error }}
                            </div>
                        @endforeach
                      @endif
                      <small class="text-muted">Full name as displayed on card</small>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="cc-number">Credit card number</label>
                      <input type="text" name="payment_cardnumber" class="form-control" id="cc-number" value="{{ old('payment_cardnumber') }}" placeholder="" required>
                      <div id="card-logo-container">
                          <!-- Card logos will be displayed here -->
                      </div>
                      @if ($errors->has('payment_cardnumber'))
                        @foreach ($errors->get('payment_cardnumber') as $error)
                            <div class="mt-2 alert alert-danger">
                              {{ $error }}
                            </div>
                        @endforeach
                      @endif
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-3 mb-3">
                      <label for="cc-expiration">Expiration</label>
                      <input type="date" name="expiration" class="form-control" id="cc-expiration" value="{{ old('expiration') }}" placeholder="" required>
                      @if ($errors->has('expiration'))
                        @foreach ($errors->get('expiration') as $error)
                            <div class="mt-2 alert alert-danger">
                              {{ $error }}
                            </div>
                        @endforeach
                      @endif
                  </div>
                  <div class="col-md-3 mb-3">
                      <label for="cc-cvv">CVV</label>
                      <input type="text" name="cvv" class="form-control" id="cc-cvv" value="{{ old('cvv') }}" placeholder="" maxlength="3" required>

                      <div class="invalid-feedback">
                          Security code required
                      </div>
                      @if ($errors->has('cvv'))
                        @foreach ($errors->get('cvv') as $error)
                            <div class="mt-2 alert alert-danger">
                              {{ $error }}
                            </div>
                        @endforeach
                      @endif
                  </div>
              </div>
              <hr class="mb-4">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Confirm Order</button>
              {{-- onclick="generatereceipt()" --}}
            </form>
          </div>
        </div>
      
      
      </div>

    <footer>
        @include('includes.footer')
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function validateForm() {
            // Implement validation logic for credit card and other fields
            // For simplicity, this example does not include comprehensive validation

            // Alert for demonstration purposes
            alert('Order submitted successfully!'); 

            // Return false to prevent the form from submitting (remove this line if you want to submit the form)
            return false;
        }
        
    </script>
    {{-- <script>function generatereceipt() {
      window.location.href = "{{ route('receipt') }}";
  }</script> --}}
    <script>
        const ccNumberInput = document.getElementById('cc-number');
        const cardLogoContainer = document.getElementById('card-logo-container');
    
        ccNumberInput.addEventListener('input', function () {
            const cardType = detectCardType(ccNumberInput.value);
            displayCardLogo(cardType);
        });
    
        function detectCardType(cardNumber) {
            // Use regex to detect card type based on the card number
            if (/^4[0-9]{12}(?:[0-9]{3})?$/.test(cardNumber)) {
                return 'visa';
            } else if (/^5[1-5][0-9]{14}$/.test(cardNumber)) {
                return 'mastercard';
            } else if (/^3[47][0-9]{13}$/.test(cardNumber)) {
                return 'amex';
            } else {
                return 'unknown';
            }
        }
    
        function displayCardLogo(cardType) {
            // Clear previous logos
            cardLogoContainer.innerHTML = '';
    
            // Display the corresponding card logo
            if (cardType === 'visa') {
                cardLogoContainer.innerHTML = '<img src="https://logowik.com/content/uploads/images/visa-payment-card1873.jpg" alt="Visa">';
            } else if (cardType === 'mastercard') {
                cardLogoContainer.innerHTML = '<img src="https://imageio.forbes.com/blogs-images/steveolenski/files/2016/07/Mastercard_new_logo-1200x865.jpg?height=512&width=711&fit=bounds" alt="Mastercard">';
            } else if (cardType === 'amex') {
                cardLogoContainer.innerHTML = '<img src="https://centaur-wp.s3.eu-central-1.amazonaws.com/designweek/prod/content/uploads/2018/04/10121846/am_amex_06.jpg" alt="American Express">';
            }
            // Add more conditions for other card types as needed
        }
    </script>
</body>

</html>

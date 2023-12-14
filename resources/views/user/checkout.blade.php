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
              <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Product name</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$12</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Second product</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$8</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Third item</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Promo code</h6>
                  <small>EXAMPLECODE</small>
                </div>
                <span class="text-success">-$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <strong>$20</strong>
              </li>
            </ul>
      
            <form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-secondary">Redeem</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">First name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
              </div>
      
         
      
              <div class="mb-3">
                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
      
              <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>
      
              <div class="mb-3">
                <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
              </div>
      
              <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="region">Region</label>
                    <select class="custom-select d-block w-100" id="region" required>
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
                    <div class="invalid-feedback">
                        Please select a valid region.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter City" required>
                    <div class="invalid-feedback">
                        Please enter a valid city.
                    </div>
                </div>
                
                <div class="col-md-3 mb-3">
                  <label for="zip">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>
          
             
              <hr class="mb-4">
      
              <h4 class="mb-3">Payment</h4>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="cc-name">Name on card</label>
                      <input type="text" class="form-control" id="cc-name" placeholder="" required>
                      <small class="text-muted">Full name as displayed on card</small>
                      <div class="invalid-feedback">
                          Name on card is required
                      </div>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="cc-number">Credit card number</label>
                      <input type="text" class="form-control" id="cc-number" placeholder="" required>
                      <div id="card-logo-container">
                          <!-- Card logos will be displayed here -->
                      </div>
                      <div class="invalid-feedback">
                          Credit card number is required
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-3 mb-3">
                      <label for="cc-expiration">Expiration</label>
                      <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                      <div class="invalid-feedback">
                          Expiration date required
                      </div>
                  </div>
                  <div class="col-md-3 mb-3">
                      <label for="cc-cvv">CVV</label>
                      <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                      <div class="invalid-feedback">
                          Security code required
                      </div>
                  </div>
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Confirm Order</button>
            </form>
          </div>
        </div>
      
        <footer class="my-5 pt-5 text-muted text-center text-small">
          <p class="mb-1">&copy; 2017-2019 Company Name</p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
          </ul>
        </footer>
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

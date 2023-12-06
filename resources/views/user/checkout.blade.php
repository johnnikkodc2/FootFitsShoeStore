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

<body>
    <div class="container">
        <h2>Checkout</h2>
  <!-- Order Summary -->
  <div class="summary">
    <h3>Order Summary</h3>
 
    <table>
        <thead>
            <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
    <tr>
        <td class="product2"><img src="" alt="Product Image"></td>
        <td class="product-details2">
            <p>Product Name</p>
        </td>
        <td>$2222</td>
        <td>1</td>
    </tr>
</tbody>
</table>
      
  
</div>
        <!-- Display Total Price -->
        <p>Total Price: $1111</p>

        <!-- Checkout Form -->
        <form id="checkoutForm" onsubmit="return validateForm()">
            <!-- Payment Details -->
            <h3>Payment Details</h3>
            <label for="cardNumber">Credit Card Number:</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter your credit card number" required>

            <label for="expiryDate">Expiry Date:</label>
            <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YYYY" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required>

            <!-- Shipping Details -->
            <h3>Shipping Details</h3>
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Enter your address" required>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" placeholder="Enter your city" required>

            <label for="zipCode">ZIP Code:</label>
            <input type="text" id="zipCode" name="zipCode" placeholder="Enter your ZIP code" required>

          

            <button type="submit" class="btn btn-primary">Submit Order</button>
        </form>
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
</body>

</html>

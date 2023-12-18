<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	@include('includes.adminHeader')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Products</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/business-casual.css" rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
		rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
		rel="stylesheet" type="text/css">

		<!-- Include toastr CSS and JS files -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<style>
		.horizontal-radio-group {
			display: flex;
		}

		.form-check {
			margin-right: 10px; /* Adjust the spacing as needed */
		}
	</style>

</head>

<body  style="background:purple">

	

	<div class="container">

		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">Product List</h2>
					@if (session('success'))
						<div id="successMessage" style="background-color:#28a745; padding: 15px 15px 15px 15px; border-radius:5px;">
							{{session('success')}}
						</div>
					@endif
					<div class="card">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Brand</th>
									<th>Price</th>
									<th>Size</th>
									<th>Color</th>
									<th>Category</th>
									<th>Quantity</th>
									<th>Modify</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($products as $product)
								<tr>
									<td>{{ $product->id }}</td>
									<td>{{ $product->product_name }}</td>
									<td>{{ $product->product_brand }}</td>
									<td>&#8369; {{ number_format($product->product_price) }}</td>
									<td>{{ $product->product_size }}</td>
									<td>{{ $product->product_color }}</td>
									<td>{{ $product->product_category }}</td>
									<td>{{ $product->product_quantity }}</td>
									<td>
										<a href="{{url('editproducts/edit/'.$product->id)}}" class="btn btn-info">Edit</a>
										<button onclick="confirmDelete({{ $product->id }})" class="btn btn-danger">Delete</button>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					</div>

					<div class="col-md-12">
						<div class="card">
							<hr>
							<h2 class="intro-text text-center">Add Product</h2>
							<form method="POST" action="{{ route('AllProducts') }}" enctype="multipart/form-data">
								@csrf
								<div class="mb-3">
									<label for="product_brand" class="form-label">Brand</label>
									<select class="form-control" name="product_brand" id="product_brand" required>
										<option value="nike">Nike</option>
										<option value="adidas">Adidas</option>
										<option value="converse">Converse</option>
										<option value="vans">Vans</option>
										<option value="skechers">Skechers</option>
										<option value="newbalance">New Balance</option>
										<option value="reebok">Reebok</option>
										<option value="puma">Puma</option>
										<option value="underarmour">Under Armour</option>
										<option value="asics">ASICS</option>
								
									</select>
								</div>
								<div class="mb-3">
									<label for="product_name" class="form-label">Name</label>
									<input type="text" class="form-control" name="product_name" id="product_name" required>
								</div>
								<div class="mb-3">
									<label for="product_price" class="form-label">Price</label>
									<input type="number" class="form-control" name="product_price" id="product_price" oninput="formatPrice(this)" required />
								</div>
								<div class="mb-3">
    <label for="product_size" class="form-label">Size</label>

    <div class="horizontal-radio-group">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="product_size" id="size_10" value="10" required>
            <label class="form-check-label" for="size_10">10</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="product_size" id="size_11" value="11" required>
            <label class="form-check-label" for="size_11">11</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="product_size" id="size_12" value="12" required>
            <label class="form-check-label" for="size_12">12</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="product_size" id="size_13" value="13" required>
            <label class="form-check-label" for="size_13">13</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="product_size" id="size_14" value="14" required>
            <label class="form-check-label" for="size_14">14</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="product_size" id="size_15" value="15" required>
            <label class="form-check-label" for="size_15">15</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="product_size" id="size_16" value="16" required>
            <label class="form-check-label" for="size_16">16</label>
        </div>
    </div>
</div>

								<div class="mb-3">
									<label for="product_quantity" class="form-label">Quantity</label>
									<input type="number" class="form-control" name="product_quantity" id="product_quantity " required>
								</div>
								<div class="mb-3">
									<label for="product_color" class="form-label">Color</label>
									<input type="text" class="form-control" name="product_color" id="product_color" required>
								</div>
								<div class="mb-3">
									<label for="product_description" class="form-label">Description</label>
									<textarea class="form-control" name="product_description" id="product_description" required></textarea>
								</div>
								
								<div class="mb-3">
									<label for="product_category" class="form-label">Category</label>
									<select class="form-control" name="product_category" id="product_category" required>
										<option value="Lifestyle">Lifestyle</option>
										<option value="Running">Running</option>
										<option value="Basketball">Basketball</option>
										<option value="Football">Football</option>
										<option value="Formal">Formal</option>
									</select>
								</div>
								
								    <!-- Add file input for images -->
    <!-- Add file input for images -->
    <div class="mb-3">
        <label for="product_images" class="form-label">Product Images (up to 6)</label>
        <input type="file" class="form-control" name="product_images[]" id="product_images" multiple accept="image/*" onchange="handleFileSelect(this)">
    </div>
    <!-- Display selected file names in a dropdown with delete buttons -->
    <div class="mb-3">
        <label for="selected_images" class="form-label">Selected Images</label>
        <select id="selected_images" name="selected_images[]" class="form-control" multiple readonly></select>
    </div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				
				</div>
			</div>
		</div>

	</div>
	<!-- /.container -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p>Copyright &copy; FootFits 2023</p>
				</div>
			</div>
		</div>
	</footer>
	<script>
		function confirmDelete(productId) {
			// Display a confirmation dialog
			var result = confirm("Are you sure you want to delete this product?");
	
			// If the user clicks "OK," proceed with the delete operation
			if (result) {
				window.location.href = "{{ url('manageproducts/delete') }}" + '/' + productId;
			}
		}
	</script>
	<script>
        function handleFileSelect(input) {
            var selectedImages = document.getElementById('selected_images');
            selectedImages.innerHTML = ''; // Clear the dropdown

            if (input.files.length > 6) {
                alert('You can only select up to 6 files.');
                input.value = ''; // Clear the file input
                return;
            }

            for (var i = 0; i < input.files.length; i++) {
                var option = document.createElement('option');
                option.text = input.files[i].name;

                // Add a delete button
                var deleteButton = document.createElement('button');
                deleteButton.innerHTML = 'Delete';
                deleteButton.className = 'btn btn-danger btn-sm mx-2';
                deleteButton.type = 'button';

                // Attach a click event to delete the option
                deleteButton.addEventListener('click', function () {
                    selectedImages.removeChild(option);
                });

                // Append the option and delete button to the dropdown
                selectedImages.add(option);
                selectedImages.appendChild(deleteButton);
            }
        }
    </script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function () {

		});
	</script>
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
        // Form submission
        $('form').submit(function (e) {
            e.preventDefault();

            // Perform your form submission logic here

            // Display success toast
            toastr.success('Form submitted successfully!', 'Success');

            // Clear the form or redirect if needed
            // ...

            // Example: Clear form fields
            $(this)[0].reset();
        });
    });
	</script>
	<script>
		var successMessage = document.getElementById('successMessage');
		function hideSuccessMessage() {
			successMessage.style.display = 'none';
		}
		setTimeout(hideSuccessMessage, 1500); 
	</script>

</body>

</html>
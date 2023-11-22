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

</head>

<body  style="background:purple">

	

	<div class="container">

		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">Product List</h2>
					<div class="card">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Product Name</th>
									<th>Product Brand</th>
									<th>Product Price</th>
									<th>Product Size</th>
									<th>Product Color</th>
									<th>Product Category</th>
									<th>Modify</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($products as $product)
								<tr>
									<td>{{ $product->id }}</td>
									<td>{{ $product->product_name }}</td>
									<td>{{ $product->product_brand }}</td>
									<td>{{ $product->product_price }}</td>
									<td>{{ $product->product_size }}</td>
									<td>{{ $product->product_color }}</td>
									<td>{{ $product->product_category }}</td>
									<td>
										<a href="{{url('editproducts/edit/'.$product->id)}}" class="btn btn-info">Edit</a>
										<a href="{{url('manageproducts/delete/'.$product->id)}}" class="btn btn-danger">Delete</a>
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
							<form method="POST" action="{{ route('AllProducts') }}" >
								@csrf
								<div class="mb-3">
									<label for="product_name" class="form-label">Product Name</label>
									<input type="text" class="form-control" name="product_name" id="product_name">
								</div>
								<div class="mb-3">
									<label for="product_brand" class="form-label">Product Brand</label>
									<input type="text" class="form-control" name="product_brand" id="product_brand">
								</div>
								<div class="mb-3">
									<label for="product_price" class="form-label">Product Price</label>
									<input type="text" class="form-control" name="product_price" id="product_price">
								</div>
								<div class="mb-3">
									<label for="product_size" class="form-label">Product Size</label>
									<input type="text" class="form-control" name="product_size" id="product_size">
								</div>
								<div class="mb-3">
									<label for="product_color" class="form-label">Product Color</label>
									<input type="text" class="form-control" name="product_color" id="product_color">
								</div>
								<div class="mb-3">
									<label for="product_category" class="form-label">Product Category</label>
									<input type="text" class="form-control" name="product_category" id="product_category">
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

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Details</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Product Image Carousel -->
                <div id="productImageCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @if (!empty($products->product_images))
                            @foreach ($products->product_images as $index => $image)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <img src="{{ asset('img/' . $image) }}" class="d-block w-100" alt="Product Image {{ $index + 1 }}">
                                </div>
                            @endforeach
                        @else
                            <!-- Default alternative images if product_images is empty -->
                            <div class="carousel-item active">
                                <img src="{{ asset('img/logo.png') }}" class="d-block w-100" alt="Alt Image 1">
                            </div>
                            
                        @endif
                    </div>
                    <a class="carousel-control-prev" href="#productImageCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#productImageCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            
               
            <form action="{{ url('/productDetails/add_cart/'.$products->id) }}" method="post" class="col-md-6" style="background-color: white; padding: 20px;">
                @csrf
                <!-- Product Details -->
                <h1>{{$products->product_name}}</h1>
                <p><strong>Brand:</strong> {{$products->product_brand}}</p>
                <p><strong>Price:</strong> {{$products->product_price}}</p>
                <p><strong>Size:</strong> {{$products->product_size}}</p>
                <p><strong>Color:</strong> {{$products->product_color}}</p>
                <p><strong>Category:</strong> {{$products->product_category}}</p>
                <input type="number" name="quantity" />
                <button type="submit" class="btn btn-primary">Add to Cart</button>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                @endif
            </form>
            
        </div>
    </div>

    <footer style="margin-top: 20px;">
        @include('includes.footer')
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

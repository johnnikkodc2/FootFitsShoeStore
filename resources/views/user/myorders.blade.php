<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('css/myorders.scss') }}">
    <title>My Orders</title>
</head>

<body>
    <div class="container-fluid px-0 bg-black">
        <div class="container px-0">
          <nav class="tanga-header navbar navbar-toggleable-sm justify-content-center">
            <div class="navbar-collapse text-center">
              <a class="navbar-brand mr-4" href="#">
                <img src="https://dealqueue.tanganetwork.com/images/logo-506c0d3ed2d6fe57bd44a49118fd1939.png" width="" height="30" alt="">
              </a>
            </div>
          </nav>
        </div>
      </div>
      <div class="container mt-3 mt-md-5">
        <div class="col-lg-12">
            <hr>
            <hr>
            <h2 class="intro-text text-center">
                <strong>My Orders</strong>
            </h2>
            <hr>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="list-group mb-5">
              <div class="table-responsive">
                  @if (session('success'))
                    <div class="alert my-2 alert-primary alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                  @endif
                  <table id="myTable" class="table text-center bg-white">
                      <thead>
                          <tr>
                              <th>Order Number</th>
                              <th>Date</th>
                              <th>Total</th>  
                              <th>Receipt</th>                         
                              <th>Status</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($orders as $order_item)
                          <tr>
                              <td>
                                  #{{ $order_item->id }}
                              </td>
                              <td>
                                  <p>{{ $order_item->created_at }}</p>
                              </td>
                              <td>&#8369; <span id="amount" class="amount">{{ $order_item->total_price }}</span></td>
                              <td><a href="{{ url('receipt/' . $order_item->id) }}" style="color:blue;">Click to View</a></td>
                              <td>{{ $order_item->status }}</td>
                            
                          </tr>
                          @endforeach 
                      </tbody>
                  </table> 
                </div>

              {{-- <div class="list-group-item p-3 bg-white">
                <div class="row no-gutters">
                  <div class="col-12 col-md-9 pr-0 pr-md-3">
                  
                  </div>
             
                  @foreach ($orderProducts as $order_item)
                  
                      <div class="row gap-4 no-gutters mt-3">
                        <div class="col-9 col-md-8 pr-0 pr-md-3">
                          <h6 class="text-charcoal mb-2 mb-md-1">
                            <a href="" class="text-charcoal">Order #{{ $order_item->order_id }}</a>

                          </h6>
                        <div class="col-6 col-md-1">
                          <img class="img-fluid pr-3" src="https://tanga2.imgix.net/https%3A%2F%2Fs3.amazonaws.com%2Ftanga-images%2Ffc79d08c12dc.jpeg?ixlib=rails-2.1.1&fit=crop&w=500&h=500&auto=format%2Ccompress&cs=srgb&s=c9a50d474788f2658d13b21aa62edd6c" alt="">
                        </div>
                        <div class="col-9 col-md-8 pr-0 pr-md-3">
                          <h6 class="text-charcoal mb-2 mb-md-1">
                            <a href="" class="text-charcoal">{{ $order_item->product->product_name }}</a>

                          </h6>
                          <ul class="list-unstyled text-pebble mb-2 small">
                            <li class="">
                              <b>Color:</b> {{ $order_item->product->product_color }}
                            </li>
                            <li class="">
                              <b>Size:</b> {{ $order_item->product->product_size }}
                            </li>
                          </ul>
                          <h6 class="text-charcoal text-left mb-0 mb-md-2"><b>&#8369;{{ $order_item->product->product_price }}</b></h6>
                        </div>
                        
                      </div>
                      <div class="alert p-2 alert-success w-100 mb-0">
                        <h6 class="text-green mb-0"><b>{{ $order_item->status }}</b></h6>
                        <p class="text-green hidden-sm-down mb-0">Est. delivery between Aug 5 – Aug 9th, 2017</p>
                      </div>
                  @endforeach  
                </div>
              </div> --}}
            </div>
          </div>
          
    
      <div class="p-3 hidden-md-up"></div>
      
          </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function deleteCartItem(orderId) {
            var isConfirmed = confirm("Are you sure you want to cancel your order?");

            if (isConfirmed) {
                window.location.href = "{{ url('myorders/delete_order/') }}" + '/' + orderId;
            }
        }
    </script>
</body>

<footer>
  @include('includes.footer')
</footer>

</html>

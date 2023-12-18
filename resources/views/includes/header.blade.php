<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FootFits</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Geologica:wght@600&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>
    <div class="fixed-top">
        <header class="topbar">
            <div class="container">
              <div class="row">
                <!-- social icon-->
                <div class="col-sm-12">
                  <ul class="social-network">
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
      
              </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
          <div class="container">
            <a class="navbar-brand" href="index.html" style="text-transform: uppercase;"><img src="../img/logo.png" alt="" style="width: 2.5rem"> FootFits </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
      
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ url('/') }}" style="color: black; text-decoration:none"><h3 class="menuItem nav-link">HOME</h3></a>
                </li>
              
                <li class="nav-item">
                    <a href="{{ url('/shop') }}" style="color: black; text-decoration:none"><h3 class="menuItem nav-link">PRODUCTS</h3></a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/about') }}" style="color: black; text-decoration:none"><h3 class="menuItem nav-link">ABOUT</h3></a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/faq') }}" style="color: black; text-decoration:none"><h3 class="menuItem nav-link">FAQS</h3></a>
                </li>
                @guest
        <li class="nav-item">
            <a href="{{ url('/login') }}" style="color: black; text-decoration:none"><h3 class="menuItem nav-link">LOGIN</h3></a>
        </li>
        @endguest
        <li class="nav-item">
          <div class="navBottom collapse navbar-collapse" id="navbarSupportedContent">
 

            <div class="navBottom collapse navbar-collapse" id="navbarSupportedContent">


@auth
  

<div class="nav-item">
  <a class="nav-link" href="{{ route('cart') }}">
      <i class="fas fa-shopping-cart"> <span class="badge badge-danger">{{ count($cart) }}</span>
      </a></i>
         
</div>



</div>


        </div>
      </li>

      <li class="nav-item" style="margin-left: 40px;">
        <div class="dropdown" style="display: block; align-items: right;">
        <a class="dropdown-toggle btn btn-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           {{ Auth::user()->name }}
            <span class="caret"></span>
        </a>
    
        <div class="dropdown-menu dropdown-menu-right" style="align-content: right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
            <a class="dropdown-item" href="{{ route('myorders') }}">Orders</a>
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <button type="submit" href="{{ route('logout') }}" @click.prevent="$root.submit();" class="dropdown-item">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
        </div>
    </li>
    @endauth
              </ul>
            
            </div>
          </div>
        </nav>
      </div>
</body>
<script src="home.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
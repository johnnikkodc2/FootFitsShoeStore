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


</head>
<body>

    <nav id="nav">
        <div class="navTop" >
            <div class="navItem">
                <img src="../img/logo.png" alt="" style="position: absolute; top: -10px; width: 150px">
            </div>
        </div>
        <div class="navBottom">
            
            <a href="{{ url('/') }}" style="color: black; text-decoration:none"><h3 class="menuItem">HOME</h3></a>
                <a href="{{ url('/bestseller') }}" style="color: black; text-decoration:none"><h3 class="menuItem">BEST SELLERS</h3></a>
                    <a href="{{ url('/shop') }}" style="color: black; text-decoration:none"><h3 class="menuItem">PRODUCTS</h3></a>
                        <a href="{{ url('/about') }}" style="color: black; text-decoration:none"><h3 class="menuItem">ABOUT</h3></a>
                            <a href="{{ url('/register') }}"><form class="form-inline" style="position: relative">
                <i class="fas fa-search" aria-hidden="true"></i>
                <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                  aria-label="Search">
              </form>
            
        </div>
        <div class="dropdown" style="    display: block;
            align-items: right ; position: relative; top: 0px; left: 1420px">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa-regular fa-user"></i>
                <span class="caret"></span></button>
                <ul class="dropdown-menu dropdown-menu-right" style="align-content: right">
                  <li><a href="{{ route('register') }}">Sign Up</a></li>
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="#">Cart</a></li>
                </ul>
              </div>
    </nav>
  <!-- Navbar -->

    {{-- <img src="{{ url('img/logo.png') }}" style="height:150px;width:150px;display: block; margin-left: auto; margin-right: auto;margin-bottom:0px">
    <div class="brand">FootFits</div>
    <div class="address-bar"> Your Ultimate Destination for <strong>Stylish and Comfortable Footwear</strong></div>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">FootFits</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('bestseller') }}">Best Sellers</a></li>
                    <li><a href="{{ url('shop') }}">Shop</a></li>
                    <li><a href="{{ url('about') }}">About</a></li>
                    <li><a href="{{ url('register') }}">Register</a></li>
                    @auth
                  
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
           
                    <li><a href="login">Login</a></li>
                @endauth
                </ul>
            </div>
        </div>
    </nav> --}}
    
</body>

<script src="home.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


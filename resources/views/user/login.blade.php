<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- Add your CSS links here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
    @include('includes.header')
<body>

    <div class="mb-4">
        @if (session('status'))
            <div class="font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <x-validation-errors class="mb-4" />
    <div class="container w-full py-5 h-100" >
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="position: relative; left: -200px; border-radius: 1rem; width: 1200px">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block" >
                  <img src="https://i.pinimg.com/564x/4e/06/06/4e060602564a3b9bb09c0d16bfb9ea03.jpg"
                    alt="login form" style="width: 490px; height: 700px; margin-top:15px; margin-left:25px; border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
    
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <img src="img/logo.png" alt="Your Logo" style="height:100px;width:100px;display: block; margin-left: auto; margin-right: auto; margin-bottom:0px">
                      </div>

                      @if (session('message'))
                          <div class="alert my-4 alert-primary alert-dismissible fade show" role="alert">
                              {{ session('message') }}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                      @endif
    
                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
    
                      <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control form-control-lg {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <label class="form-label" for="name" >{{ __('Email Address') }}</label>
                        @if ($errors->has('email'))
                           <div class="invalid-feedback">
                             {{ $errors->first('email') }}
                           </div>
                        @endif
                       </div>
                       
                       <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control form-control-lg {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required autocomplete="current-password" />
                        <label class="form-label" for="password">{{ __('Password') }}</label>
                        @if ($errors->has('password'))
                           <div class="invalid-feedback">
                             {{ $errors->first('password') }}
                           </div>
                        @endif
                       </div>

                      
        <div class="form-group">
            <label for="remember_me" class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox" class="form-checkbox" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember Me') }}</span>
            </label>
        </div>
    
                      <div class="pt-1 mb-4"><a href="{{ route('index') }}">
                        <button class='btn btn-dark btn-lg btn-block' type="submit" class="btn btn-default ml-4">{{ __('Log in') }}</button>
                    </a>
                      </div>
    
                      <a class="small text-muted" href="#!">Forgot password?</a>
                      <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{ route('register') }}"
                          style="color: #393f81;">Register here.</a></p>
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    {{-- <div class="container opacity-80">

        <div class="row">
            <div class="box">

                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Please Login</h2>
                    <hr>
                </div>

                <div class="col-md-6">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="flex form-group">
            <label for="email">{{ __('Email') }}</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" class="bg--bs-primary-bg-subtle block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="form-group">
            <label for="remember_me" class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox" class="form-checkbox" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="form-group">
            <a href="{{ route('index') }}">
                <button class='btn btn-info' type="submit" class="btn btn-default ml-4">{{ __('Log in') }}</button>
            </a>
        </div>
        <div class="form-group">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
       
    </form>
</div>

</div>
</div> --}}

</div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        // Your existing JavaScript code here
    </script>
</body>

<footer>
    @include('includes.footer')
</footer>
</html>
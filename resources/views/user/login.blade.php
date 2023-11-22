<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Add your CSS links here -->
</head>
    @include('includes.header')
<body>

    <div>
        <img src="img/logo.png" alt="Your Logo" style="height:150px;width:150px;display: block; margin-left: auto; margin-right: auto; margin-bottom:0px">
    </div>

    <div class="mb-4">
        @if (session('status'))
            <div class="font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="container">

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

        <div class="form-group">
            <label for="email">{{ __('Email') }}</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="form-group">
            <label for="remember_me" class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox" class="form-checkbox" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="form-group">
            <a href="{{ route('index') }}">
                <button type="submit" class="btn btn-default ml-4">{{ __('Log in') }}</button>
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
</div>

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

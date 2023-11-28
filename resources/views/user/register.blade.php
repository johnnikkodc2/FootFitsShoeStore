<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
</head>

<body>
    @include('includes.header')
    
    <div class="container w-full py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="w-100 border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block" >
                  <img src="https://i.pinimg.com/564x/4e/06/06/4e060602564a3b9bb09c0d16bfb9ea03.jpg"
                    alt="login form" class="img-fluid" style="width: 900px; margin-top:30px; margin-left:20px; border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
    
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <img src="img/logo.png" alt="Your Logo" style="height:100px;width:100px;display: block; margin-left: auto; margin-right: auto; margin-bottom:0px">
                    </div>

    
                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
    
                      <div class="form-outline mb-4">
                        <input id="name"  type="text" class="form-control form-control-lg" name="name" :value="old('name')" required autofocus autocomplete="name"/>
                        <label class="form-label" for="name" value="{{ __('Name') }}">Name</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <label class="form-label" for="name" value="{{ __('Email') }}">Email</label>                      </div>
    
                      <div class="form-outline mb-4">
                        <input id="password"  type="password" name="password" required autocomplete="new-password" class="form-control form-control-lg" :value="old('password')" />
                        <label class="form-label" for="name" value="{{ __('Password') }}">Password</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input input id="password_confirmation" class="form-control form-control-lg" type="password" name="password_confirmation" required autocomplete="new-password"/>
                        <label class="form-label" for="name" value="{{ __('Confirm Password') }}">Confirm Password</label>
                      </div>

                      
        <div class="form-group">
            <label for="remember_me" class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox" class="form-checkbox" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember Me') }}</span>
            </label>
        </div>
    
                      <div class="pt-1 mb-4"><a href="{{ route('index') }}">
                        <button class='btn btn-dark btn-lg btn-block' type="submit" class="btn btn-default ml-4">{{ __('Register') }}</button>
                    </a>
                      </div>
    
                      <a class="small text-muted" href="#!">Forgot password?</a>
                      <p class="mb-5 pb-lg-2" style="color: #393f81;">Already Registered? <a href="{{ route('login') }}"
                          style="color: #393f81;">Login.</a></p>
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="mb-4">
        <x-validation-errors class="mb-4" />
    </div>

    {{-- <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">

                        Register

                    </h2>
                    <hr>
                    <div class="col-md-6">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </div>

        <div class="form-group">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        </div>

        <div class="form-group">
            <x-label for="password" value="{{ __('Password') }}" />
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>

        <div class="form-group">
            <x-label for="password" value="{{ __('Confirm Password') }}" />
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>

        <div class="form-group">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
        @endif

        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4 btn btn-default">
                {{ __('Register') }}
            </x-button>
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

           
        </div>
    </form>
</div>
</div>
</div>
</div>

</div> --}}
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

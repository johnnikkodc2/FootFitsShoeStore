<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <!-- Add your CSS links here -->
</head>
    @include('includes.adminHeader')
<body>

   

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
                    <h2 class="intro-text text-center">Admin Register</h2>
                    <hr>
                </div>

                <div class="col-md-6">
    <form method="POST" action="{{ route('login') }}">
       
       
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

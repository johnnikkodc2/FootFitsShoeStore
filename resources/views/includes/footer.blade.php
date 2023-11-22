<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <p>
                @auth
                    <strong>{{ Auth::user()->name }}</strong><br>
                    <strong>
                        <a href="{{ route('user.manage-account') }}">Manage Account</a> |
                        <a href="{{ route('logout') }}">Logout</a> |
                        <a href="#">Back to top</a>
                    </strong><br>
                @else
                    <strong>
                        <a href="{{ route('login', ['Role' => 'User']) }}">Login</a> |
                        <a href="#">Back to top</a>
                    </strong><br>
                @endauth
                Copyright &copy; FootFits 2023
            </p>
        </div>
    </div>
</div>

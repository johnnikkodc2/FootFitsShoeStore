<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <p>

                <footer>
                   
                    @auth
                    <strong>{{ Auth::user()->name }}</strong><br>
                    <strong>
                        <a href="{{ route('logout') }}" style="color: black; text-decoration:none">Logout</a> |
                        <a href="#" style="color: black; text-decoration:none">Back to top</a>
                    </strong><br>
                @else
                    <strong>
                        <a href="{{ route('login', ['Role' => 'User']) }}" style="color: black; text-decoration:none">Login</a> |
                        <a href="#" style="color: black; text-decoration:none">Back to top</a>
                    </strong><br>
                @endauth
                Copyright &copy; FootFits 2023
                </footer>
               
            </p>
        </div>
    </div>
</div>

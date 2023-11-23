<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <p>

                <footer>
                    <div class="footerLeft" >
                        <div class="footerMenu" >
                            <h1 class="fMenuTitle">About Us</h1>
                            <ul class="fList">
                                <li class="fListItem">Company</li>
                                <li class="fListItem">Contact</li>
                                <li class="fListItem">Carrers</li>
                                <li class="fListItem">Affiliates</li>
                                <li class="fListItem">Stores</li>
                            </ul>
                        </div>
                        <div class="footerMenu" >
                            <h1 class="fMenuTitle">Useful Links</h1>
                            <ul class="fList">
                                <li class="fListItem">Support</li>
                                <li class="fListItem">Refund</li>
                                <li class="fListItem">FAQ</li>
                                <li class="fListItem">Feedback</li>
                                <li class="fListItem">Stores</li>
                            </ul>
                        </div><div class="footerMenu" >
                            <h1 class="fMenuTitle">Products</h1>
                            <ul class="fList">
                                <li class="fListItem">Air Force </li>
                                <li class="fListItem">Air Jordan</li>
                                <li class="fListItem">Blazer</li>
                                <li class="fListItem">Craters</li>
                                <li class="fListItem">Hippie</li>
                            </ul>
                        </div>
                    </div>
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

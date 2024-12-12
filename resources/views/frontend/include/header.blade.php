<nav class="navbar navbar-chang navbar-expand-lg">
    <div class="container position-re">
        <div class="row">
            <div class="col-lg-3 col-6 order1">
                <div class="bord">
                    <!-- Logo -->
                    <a class="logo icon-img-70" href="{{ route('home') }}">
                        <img src="{{ asset(getSetting()->logo) }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order3">
                <div class="bg">
                    <!-- navbar links -->
                    <div class="full-width">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}"><span
                                        class="rolling-text">Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}"><span
                                        class="rolling-text">About</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('service') }}"><span
                                        class="rolling-text">Services</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('portfolio') }}"><span
                                        class="rolling-text">Portfolio</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blog') }}"><span
                                        class="rolling-text">Blog</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}"><span
                                        class="rolling-text">Contact</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 order2">
                <div class="bord d-flex justify-content-end">
                    <ul class="social d-flex rest">
                        @if ( !empty(getSetting()->github_url) )
                            <li>
                                <a href="{{ getSetting()->github_url }}"><i class="fab fa-github"></i></a>
                            </li>
                        @endif 

                        @if ( !empty(getSetting()->facebook_url) )
                            <li>
                                <a href="{{ getSetting()->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                            </li> 
                        @endif

                        @if ( !empty(getSetting()->linkedin_url) )
                            <li>
                                <a href="{{ getSetting()->linkedin_url }}"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        @endif

                        @if ( !empty(getSetting()->pinterest_url) )
                            <li>
                                <a href="{{ getSetting()->pinterest_url }}"><i class="fab fa-pinterest"></i></a>
                            </li>
                        @endif
                    </ul>
                    <button class="navbar-toggler" type="button">
                        <span class="icon-bar"><i class="fas fa-bars"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
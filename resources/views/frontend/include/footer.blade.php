<footer>
    <div class="container pb-30 pt-30 bord-thin-top">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 text-center text-md-start text-lg-start mb-3">
                <p class="fz-13">© {{ getSetting()->copyright }} by <span class="underline main-color"><a href="{{ route('home') }}" target="_blank">{{ getSetting()->site_name }}</a></span>
                </p>
            </div>

            <div class="col-12 col-md-6 col-lg-6">
                <ul class="social_link">
                    @if ( !empty(getSetting()->github_url) )
                        <li>
                            <a href="{{ getSetting()->github_url }}"><i class="fab fa-github"></i></a>
                        </li>
                    @endif                    

                    @if ( !empty(getSetting()->linkedin_url) )
                        <li>
                            <a href="{{ getSetting()->linkedin_url }}"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    @endif
                    
                    @if ( !empty(getSetting()->facebook_url) )
                        <li>
                            <a href="{{ getSetting()->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                        </li> 
                    @endif

                    @if ( !empty(getSetting()->instagram_url) )
                        <li>
                            <a href="{{ getSetting()->instagram_url }}"><i class="fab fa-instagram"></i></a>
                        </li>
                    @endif

                    @if ( !empty(getSetting()->pinterest_url) )
                        <li>
                            <a href="{{ getSetting()->pinterest_url }}"><i class="fab fa-pinterest"></i></a>
                        </li>
                    @endif

                    @if ( !empty(getSetting()->twitter_url) )
                        <li>
                            <a href="{{ getSetting()->twitter_url }}"><i class="fab fa-twitter"></i></a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

                {{-- <h1 class="logo"><a href="index.html">Sailor</a></h1> --}}
                <!--  image logo -->
                <a href="/" class="logo"><img src="{{ asset('assets/img/logo.png') }}" alt="img" class="img-fluid"></a>

                <nav class="nav-menu d-none d-lg-block">

                        <ul>


                                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                                <li class="{{ Request::is('concept') ? 'active' : '' }}"> <a
                                                href="{{ route('concept') }}">Our
                                                Concept</a></li>
                                <li class="{{ Request::is('video') ? 'active' : '' }}"> <a
                                                href="{{ route('video') }}">Videos</a></li>
                                <li class="{{ Request::is('disater-relief') ? 'active' : '' }}"> <a
                                                href="{{ route('disater') }}">Disaster
                                                Relief</a></li>
                                <li class="{{ Request::is('grow-home') ? 'active' : '' }}"> <a
                                                href="{{ route('grow-home') }}">Grow
                                                Home</a></li>
                                <li class="{{ Request::is('home-for-americans') ? 'active' : '' }}"> <a
                                                href="{{ route('american') }}">Home For
                                                Americans</a></li>
                                <li class="{{ Request::is('how-to-buy') ? 'active' : '' }}"> <a
                                                href="{{ route('buy') }}">How
                                                To Buy</a></li>
                            <li class="{{ Request::is('blogs') ? 'active' : '' }}"> <a
                                                href="{{ route('blogs') }}">Blogs</a></li>
                                <li class="{{ Request::is('contact-us') ? 'active' : '' }}"> <a
                                                href="{{ route('contact') }}">Contact
                                                Us</a></li>


                        </ul>

                </nav><!-- .nav-menu -->

        </div>
</header><!-- End Header -->



    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{ route('index') }}"><img src="img/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class="{{ Route::is('index') ? 'active' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                                <li class="{{ Route::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li> 
                                <li class="{{ Route::is('portfolio') ? 'active' : '' }}"><a href="{{ route('portfolio') }}">Projects</a></li>
                                <li class="{{ Route::is('services') ? 'active' : '' }}"><a href="{{ route('services') }}">Experiences</a></li>
                                <!-- <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./about.blade.php">About</a></li>
                                        <li><a href="./portfolio.blade.php">Portfolio</a></li>
                                        <li><a href="./blog.blade.php">Blog</a></li>
                                        <li><a href="./blog-details.blade.php">Blog Details</a></li>
                                    </ul>
                                </li> -->
                                <li class="{{ Route::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
                           
                                <a href="{{ asset('img/cv/RavinduSamarasingheCV.pdf') }}" download class="btn btn-outline-light">
                                    <i class="fa fa-download"></i> Download CV
                                </a>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
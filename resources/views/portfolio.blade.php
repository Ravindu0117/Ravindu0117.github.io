<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/avicon.png') }}" type="image/png">
    <title>Ravindu Samarasinghe</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   @include('layouts.header')


    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Projects</h2>
                        <div class="breadcrumb__links">
                            <a href="{{ route('index') }}">Home</a>
                            <span>Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="portfolio__filter">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".university">University Based</li>
                        <li data-filter=".industry">Industry based</li>
                        <li data-filter=".web">Individual based</li>
                        <!-- <li data-filter=".photography">Photography</li>
                        <li data-filter=" .ecommerce">eCommerce</li> -->
                    </ul>
                </div>
            </div>
            <div class="row portfolio__gallery">
                <div class="col-lg-4 col-md-6 col-sm-6 mix university">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/green.png">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>Green Farming Hub</h4>
                            <ul>
                                <li>Agriculture</li>
                                <li>MERN Stack</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix industry">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/ims.png">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>IMS Comapany official website</h4>
                             <ul>
                                <li>E-commerce</li>
                                <li>Laravel Framework</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-3.jpg">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>Eco-waste</h4>
                            <ul>
                                <li>Agriculture</li>
                                <li>Laravel Framework</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix photography">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-4.jpg">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>SkillFlow-Skill-Sharing & Learning Platform</h4>
                            <ul>
                                <li>Education</li>
                                <li>Springboot</li>
                            </ul>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 mix ecommerce">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-5.jpg">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <span>Photography</span>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 mix branding">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-6.jpg">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <ul>
                                <li>eCommerce</li>
                                <li>Magento</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-7.jpg">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <ul>
                                <li>eCommerce</li>
                                <li>Magento</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 mix photography">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-8.jpg">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <span>Photography</span>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 mix ecommerce">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-9.jpg">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <ul>
                                <li>eCommerce</li>
                                <li>Magento</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option">
                        <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="#" class="number__pagination">2</a>
                        <a href="#" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Logo Begin -->
    <div class="logo spad">
        <div class="container">
            <div class="logo__carousel owl-carousel">
                <a href="#" class="logo__item"><img src="img/logo/logo-1.png" alt=""></a>
                <a href="#" class="logo__item"><img src="img/logo/logo-2.png" alt=""></a>
                <a href="#" class="logo__item"><img src="img/logo/logo-3.png" alt=""></a>
                <a href="#" class="logo__item"><img src="img/logo/logo-4.png" alt=""></a>
                <a href="#" class="logo__item"><img src="img/logo/logo-5.png" alt=""></a>
                <a href="#" class="logo__item"><img src="img/logo/logo-6.png" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Logo End -->
    <!-- Portfolio Section End -->

   @include('layouts.footer')

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
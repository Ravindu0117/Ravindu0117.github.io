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
                        <h2>About me</h2>
                        <div class="breadcrumb__links">
                            <a href="{{ route('index') }}">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-6">
                    <div class="about__pic">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="about__pic__item about__pic__item--large set-bg"
                                    data-setbg="img/about/about-1.jpg"></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="img/about/about-2.jpg"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="img/about/about-3.jpg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12">
                    <div class="about__text">
                        <div class="section-title">
                            <!-- <span>About videograph</span> -->
                            <h2>WHo am I?</h2>
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <div class="services__item__icon">
                                        <img src="img/icons/si-3.png" alt="">
                                    </div>
                                    <h4>Video distribution</h4>
                                    <p>Whether you’re halfway through the editing process, or you.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <div class="services__item__icon">
                                        <img src="img/icons/si-4.png" alt="">
                                    </div>
                                    <h4>Video hosting</h4>
                                    <p>Whether you’re halfway through the editing process, or you.</p>
                                </div>
                            </div>
                        </div> -->
                        <div class="about__text__desc">
                           <p>
                            I’m Ravindu Samarasinghe, an aspiring Software Engineer and current undergraduate at the Sri Lanka Institute of Information Technology (SLIIT),
                             specializing in Information Technology. With a strong foundation in both front-end and back-end technologies, I am passionate about building 
                             efficient, scalable, and user-centered digital solutions. My expertise includes working with technologies such as HTML, CSS, JavaScript, ReactJS, 
                             NodeJS, Python, Laravel, and the MERN stack, along with mobile app development in Kotlin using Android Studio.</p>
                            <p>
                            I have completed a variety of individual and group projects, including a note-taking Android application, a shopping web application, an online plant 
                            disease detection system, and several web systems using Laravel and PHP. These projects have sharpened my skills in UI/UX design, full-stack development,
                            and database management.
                            </p>
                            <p>
                            I am a detail-oriented individual with strong problem-solving abilities, time management, and teamwork skills. My goal is to continually grow as a
                             full-stack developer and leverage technology to solve real-world problems. I am particularly interested in working on projects that enhance user 
                             experience and promote accessibility and functionality across digital platforms.
                            </p>
                            <p>
                            I am always eager to learn new tools and technologies, and I actively seek opportunities to challenge myself and collaborate with like-minded professionals.
                            Let’s connect and build something amazing together!
                            </p>
                        </div>
                        <br>
                        <div class="section-title">
                            <span>Recommandations</span>
                            <h2>What co-workers say?</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="testimonial__item">
                                    <div class="testimonial__text">
                                        <p>I had the pleasure of supervising Ravindu Samarasinghe during his internship at IM Solutions, 
                                            where I serve as the Software Engineer in charge. From day one, he demonstrated a strong willingness 
                                            to learn and an admirable work ethic—qualities that helped him grow from a novice to a capable and confident developer in a remarkably short time.
                                            Despite having no prior professional experience when he joined, he quickly immersed himself in our tech stack—PHP, Laravel, HTML, CSS, and JavaScript.
                                            One of his standout contributions was the successful upgrade of our company website (ims.lk), which he handled with care and technical precision.
                                            He also took an active part in two major Laravel-based projects, proving his adaptability and collaborative spirit.
                                            Of course, like most fresh developers, he initially made a few beginner mistakes—such as misaligned code structures,
                                            over-nesting elements in HTML, inconsistent naming conventions —but what impressed me most was how quickly he learned from feedback.
                                            After participating in our training sessions and internal code reviews, he rapidly leveled up his skills, aligning with our best practices and coding standards.
                                            He is now fully capable of contributing to real-world projects and is more than ready to take on any project. I highly recommend him to any organization
                                            looking for a motivated, fast-learning, and technically sound developer.</p>
                                    </div>
                                    <div class="testimonial__author">
                                        <!-- <div class="testimonial__author__pic">
                                            <img src="img/testimonial/ta-1.jpg" alt="">
                                        </div> -->
                                        <div class="testimonial__author__text">
                                            <h5>Tharaka Gunawrdhana.</h5>
                                            <span>Software Engineer-IM Solutions(Pvt) Ltd.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <br><br><br>
                                <div class="testimonial__item">
                                    <div class="testimonial__text">
                                        <p>Ravindu worked with me as a junior software engineer, where he consistently impressed me with his dedication and problem-solving skills.
                                            He quickly adapted to our tech stack and showed great potential in developing clean, efficient code. 
                                            Ravindu is also a collaborative team member, always willing to assist colleagues and contribute effectively to discussions.
                                            He's a valuable asset to any engineering team, and I confidently recommend him.
                                        </p>
                                    </div>
                                    <div class="testimonial__author">
                                        <!-- <div class="testimonial__author__pic">
                                            <img src="img/testimonial/ta-2.jpg" alt="">
                                        </div> -->
                                        <div class="testimonial__author__text">
                                            <h5>Sandun De Silva.</h5>
                                            <span>Senior Software Engineer-IM Solutions(Pvt) Ltd.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->
    <!-- <section class="about spad" >
        <div class="container">
            <div class="row">
              
           
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-3.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Delivers such a great service that it can benefit all kinds of people from any number
                                    of industries.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> -->
    <!-- Testimonial Section End -->

    <!-- Counter Section Begin -->
    <!-- <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-1.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-2.png" alt="">
                                <h2 class="counter_num">1068</h2>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-3.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Perspective clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-4.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <!-- <section class="team spad set-bg" data-setbg="img/team-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>Nice to meet</span>
                        <h2>OUR Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="img/team/team-1.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--second set-bg" data-setbg="img/team/team-2.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--third set-bg" data-setbg="img/team/team-3.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--four set-bg" data-setbg="img/team/team-4.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    Team Section End -->

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
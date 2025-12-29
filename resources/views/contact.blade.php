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
                        @if(session('success'))
                            <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
                            <script>
                                // Hide the message after 5 seconds (5000ms)
                                setTimeout(function () {
                                    const message = document.getElementById('success-message');
                                    if (message) {
                                        message.style.display = 'none';
                                    }
                                }, 5000);
                            </script>
                        @endif
                        <h2>Contact</h2>
                        <div class="breadcrumb__links">
                            
                            <a href="{{ route('index') }}">Home</a>
                            <span>Contact</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Widget Section Begin -->
    
    <!-- Contact Widget Section End -->

    <!-- Call To Action Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                 <div class="col-lg-6 col-md-6">
                    <br><br>
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Address</h4>
                            <a href="https://maps.app.goo.gl/RT8xSSBvZ61Xbfc8A" target="_blank">'Kothalawala',Kaduwela,Sri lanka.</p>
                        </div>
                    </div>
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Hotline</h4>
                            <a href="tel:+94759229391">+94759229391</p>
                        </div>
                    </div>
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Email</h4>
                            <a href="mailto:ravindu0117@gmail.com">Ravindu0117@gmail.com</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1261.1260029428454!2d79.97347442278456!3d6.920025507072728!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256c2d2cfead7%3A0xba5fb05ced9cba0e!2sWX9G%2BX48%2C%20Malabe!5e0!3m2!1sen!2slk!4v1753697231054!5m2!1sen!2slk"
                            height="450" style="border:0;"></iframe>
                    </div>
                </div> -->
                
                <div class="col-lg-6 col-md-6">
                    <br><br>
                    <div class="contact__form">
                        <h3>Contact Me</h3>
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="Name">
                            <input type="text" name="email" placeholder="Email">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button type="submit" class="site-btn">Send Message</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

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
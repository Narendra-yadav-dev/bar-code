<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Services</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('public/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('public/images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css" />
    <style>
        body {
            color: #020202;
            font-family: Urbanist;
        }

        .hero-section {
            background: linear-gradient(rgb(0 0 0 / 30%), rgba(0, 0, 0, 0.6)), url(public/images/sti.jpeg);
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            flex-direction: column;
        }

        .navbar-brand img {
            height: auto;
        }

        .ticker-bar {
            background-color: #0c1a30;
            color: #f0c419;
            padding: 10px 0;
            overflow: hidden;
            white-space: nowrap;
        }

        .tracking-widest {
            margin-top: 100px !important;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            margin: 0 auto 20px;
            font-size: 24px;
        }

        .bg-black-car {
            background-color: #000;
            color: #ffcc00;
        }

        .bg-light-green {
            background-color: #e8f5e9;
            color: #4caf50;
        }

        .bg-light-pink {
            background-color: #fce4ec;
            color: #f06292;
        }

        .feature-title {
            font-weight: 400;
            font-size: 20px;
            margin-bottom: 10px;
        }

        ul,
        ol,
        dl {
            font-size: 18px !important;
        }

        .feature-text {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
            max-width: 280px;
            margin: 0 auto 15px;
        }

        .learn-more {
            text-decoration: none;
            font-weight: 500;
            font-size: 18px;
            transition: opacity 0.2s;
        }

        .learn-more:hover {
            opacity: 0.7;
        }

        .text-gold {
            color: #d4af37;
        }

        .text-green {
            color: #81c784;
        }

        .text-pink {
            color: #f06292;
        }

        hr.custom-divider {
            border: 0;
            border-top: 1px solid #ccc;
            margin-top: 30px;
        }

        .product-tagline {
            color: #888;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }

        .main-title {
            color: #2c3e50;
            font-weight: 700;
        }

        .feature-list {
            list-style: none;
            padding-left: 0;
        }

        .feature-item {
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .feature-item small {
            display: block;
            color: #6c757d;
            font-weight: 400;
        }

        .btn-yellow {
            background-color: #e6e9e2;
            padding: 12px;
        }

        .btn,
        .ajax-upload-dragdrop .ajax-file-upload {
            font-size: 18px !important;
        }

        .btn-yellow:hover {
            background-color: #e6e9e2;
        }

        .phone-mockup-container {
            max-width: 400px;
            margin: 0 auto;
        }

        .phone-img {
            width: 100%;
            height: auto;
        }

        .display-4 {
            font-size: 45px !important;
        }

        .indicator-line {
            border-top: 2px dashed #ccc;
            position: absolute;
        }

        p {
            font-size: 18px !important;
        }

        h6,
        .h6 {
            font-size: 25px !important;
        }

        .footer-custom {
            background-color: #1e2227;
            padding: 60px 0;
            font-size: 18px;
        }

        .footer-logo {
            max-width: 180px;
            margin-bottom: 20px;
        }

        .footer-custom h5 {
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .footer-custom a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
            transition: 0.3s;
        }

        .footer-custom a:hover {
            color: #ffffff;
        }

        small,
        .small {
            font-size: 20px !important;
        }

        .social-icons a {
            display: inline-block;
            margin-right: 15px;
            font-size: 1.2rem;
        }

        .app-store-btns img {
            height: 35px;
            margin-right: 5px;
        }

        .mobile_sidebaar_bg_color {
            background-color: #989d928f !important;
        }

        @media (max-width: 991px) {
            .responsive_class {
                padding: 0px;
            }

            .footer-logo {
                width: 110px;
            }

            .footer-custom {
                padding: 36px 0;
            }

            .available_padding {
                margin-top: 0px !important;
            }

            .main2 {
                padding: 0px !important;
            }

            .offcanvas {
                width: 280px !important;
            }

            .nav-link {
                padding: 15px 0 !important;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }
              .display-4 {
            font-size: 28px !important;
        }
.tracking-widest {
    margin-top: 10px !important;
}
        h6,
        .h6 {
            font-size: 16px !important;
        }
        }

        @media (min-width: 992px) {
            .offcanvas {
                visibility: visible !important;
                transform: none !important;
                position: static !important;
                background: transparent !important;
                width: auto !important;
                border: none !important;
            }

            .offcanvas-header {
                display: none;
            }

            .offcanvas-body {
                padding: 0;
                display: flex;
                overflow: visible;
            }
        }
    </style>
</head>

<body>
    <scetion class="main section-frame">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-absolute w-100">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="#">
                    <img src="public/images/logo1.png" width="100" height="100" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end mobile_sidebaar_bg_color" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 text-uppercase small">
                            <li class="nav-item"><a class="nav-link text-white me-lg-5" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-white me-lg-5" href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link text-white me-lg-5" href="#">Products</a></li>
                            <li class="nav-item"><a class="nav-link text-white me-lg-5" href="{{route('reader')}}">QR Code Reader</a></li>
                        </ul>
                        <div class="d-lg-none mt-3 text-white">
                            <i class="fi fi-in"></i> India (IN)
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block text-white">
                    <i class="fi fi-in"></i>
                </div>
            </div>
        </nav>
        <header class="hero-section justify-content-center d-flex text-center px-3">
            <div class="container">
                <h6 class="text-uppercase tracking-widest mb-4 text-white">Welcome to the world of privacy!</h6>
                <h1 class="display-4 mb-4 text-white">Allow people to contact you in case of <br class="d-none d-md-block"> any issue with your parked vehicle.</h1>
            </div>
        </header>
    </scetion>
    <section class="main1 pt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-normal">Car Sampark Tag, Features.</h2>
            </div>
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="feature-icon d-flex align-items-center justify-content-center bg-black-car">
                        <i class="fa fa-car"></i>
                    </div>
                    <h3 class="feature-title">Car & Bike Sampark tag</h3>
                    <p class="feature-text">
                        Your contact details will not be shared, but anyone who has any issue with your parked vehicle can contact you.
                    </p>
                    <a href="#" class="learn-more text-gold">Learn More →</a>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon d-flex align-items-center justify-content-center bg-light-green">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h3 class="feature-title">Masked Calls</h3>
                    <p class="feature-text">
                        Your phone number is kept private, you will get Masked Calls, SMS and WhatsApp.
                    </p>
                    <a href="#" class="learn-more text-green">Learn More →</a>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon d-flex align-items-center justify-content-center bg-light-pink">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <h3 class="feature-title">instant PDF delivery</h3>
                    <p class="feature-text">
                        Need instant delivery, get instant delivery on your WhatsApp and Email as a PDF. Works offline as well.
                    </p>
                    <a href="#" class="learn-more text-pink">Learn More →</a>
                </div>
            </div>
            <hr class="custom-divider">
        </div>
    </section>
    <section class="main2 py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 col-md-6">
                    <p class="product-tagline mb-2 text-uppercase">The Car Parking Tag.</p>
                    <h1 class="main-title display-5 mb-4">Masked Calls, SMS, WhatsApp and Emergency Help.</h1>
                    <ul class="feature-list mb-4">
                        <li class="feature-item">
                            <span class="text-black"><i class="fas fa-chevron-down"></i></span> Upload Files
                        </li>
                        <li class="feature-item">
                            <span class="text-black"><i class="fas fa-chevron-down"></i></span> Vehicle IN and Out Logs
                        </li>
                        <li class="feature-item">
                            <span class="text-black"><i class="fas fa-chevron-down"></i></span> One time Buy
                        </li>
                    </ul>
                    <div class="mb-3">
                        <img src="public/images/amazonbuy.png" class="img-fluid" alt="Buy now on Amazon" width="20%" height="auto">
                    </div>
                    <div class="d-grid gap-2 col-md-8">
                        <button class="btn btn-yellow border-none fw-bold rounded-3" type="button">
                            <i class="bi bi-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="phone-mockup-container position-relative">
                        <img src="public/images/phone_image.png" alt="NGF132 App Interface" class="phone-img rounded-4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white responsive_class">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <p class="text-uppercase fw-bold text-muted small mb-1">We Are</p>
                    <h2 class="fw-bold display-6 mb-3" style="color: #2c3e50;">
                        We are available on Amazon, Flipkart and in your heart.
                    </h2>
                </div>
                <div class="col-lg-6">
                    <p class="text-muted fs-5">
                        Try our service online and get free, fast delivery.
                    </p>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-4 g-4 mt-4 justify-content-center available_padding">
                <div class="col text-center">
                    <div class="p-3 shadow-sm border rounded-3 h-100 d-flex align-items-center justify-content-center">
                        <img src="public/images/amazonbuy.png" class="img-fluid" alt="Buy now on Amazon" width="80%" height="auto">
                    </div>
                </div>
                <div class="col text-center">
                    <div class="p-3 shadow-sm border rounded-3 h-100 d-flex align-items-center justify-content-center">
                        <img src="public/images/flipkart.png" class="img-fluid" alt="Flipkart" width="80%" height="auto">
                    </div>
                </div>
                <div class="col text-center">
                    <div class="p-3 shadow-sm border rounded-3 h-100 d-flex align-items-center justify-content-center">
                        <img src="public/images/google.png" class="img-fluid" alt="Get it on Google Play" width="80%" height="auto">
                    </div>
                </div>
                <div class="col text-center">
                    <div class="p-3 shadow-sm border rounded-3 h-100 d-flex align-items-center justify-content-center">
                        <img src="public/images/app.png" class="img-fluid" alt="Download on App Store" width="80%" height="auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-custom text-white">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="rounded mb-3 d-inline-block">
                        <img src="public/images/logo1.png" alt="SAMPARK.me" class="footer-logo mb-0">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Get in Touch</h5>
                    <p class="mb-1 text-secondary">GCC Noida, India</p>
                    <p class="mb-3 text-secondary">UP 201301</p>
                    <a href="mailto:hello@ngf132.com">hello@ngf132.com</a>
                    <a href="tel:+919034664487">+91 9034 6644 87</a>
                    <div class="mt-3">
                        <span class="text-secondary"><img src="https://flagcdn.com/w20/in.png" width="20" class="me-2">Update location</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Learn More</h5>
                    <a href="#">About Us</a>
                    <a href="#">Contact</a>
                    <a href="#">Terms of Use</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Franchise Management</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Company</h5>
                    <a href="#">Business Terms</a>
                    <a href="#">Refund</a>
                    <a href="#">Shipping</a>
                    <div class="app-store-btns mt-2">
                        <img src="public/images/google.png" alt="Google Play">
                        <img src="public/images/app.png" alt="App Store">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
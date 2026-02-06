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
            background-color: #FFD700;
            padding: 20px;
            width: 500px;
        }

        .btn,
        .ajax-upload-dragdrop .ajax-file-upload {
            font-size: 18px !important;
        }

        .btn-yellow:hover {
            background-color: #FFD700;
        }

        .phone-mockup-container {
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
            font-size: 18px !important;
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

        :root {
            --brand-yellow: #FFD700;
            --brand-dark: #212529;
        }


        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
        }

        .img-fluid {
            border-radius: 8px;
        }

        .btn-buy-now {
            background-color: var(--brand-yellow);
            border: none;
            font-weight: bold;
            padding: 12px;
            transition: transform 0.2s;
        }

        .btn-buy-now:hover {
            background-color: #f0c800;
            transform: scale(1.02);
        }

        .amazon-link {
            display: inline-block;
            background: #000;
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.9rem;
        }

        @media (min-width: 1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1500px !important;
            }
        }

        .display-6 {
            font-size: 34px !important;
        }

        .number_coloe {
            color: #FFD700;
        }

        .display-p {
            font-size: 34px !important;
        }

        .fs-5 {
            font-size: 19px !important;
        }

        .feature-section {
            padding: 60px 0;
        }

        .tag-title {
            font-weight: 700;
            color: #1a1a1a;
        }

        .btn-dark-custom {
            background-color: #000;
            color: #ffcc00;
            border-radius: 10px;
            padding: 20px 30px;
            font-weight: bold;
            border: none;
        }

        .btn-dark-custom:hover {
            background-color: #333;
            color: #ffcc00;
        }

        .list-unstyled li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .check-icon {
            color: #000;
            margin-right: 10px;
            font-weight: bold;
        }

        .bg-yellow-accent {
            background: linear-gradient(45deg, transparent 45%, #ffcc00 45%, #ffcc00 55%, transparent 55%);
            background-size: 20px 20px;
        }

        .custom-check-badge {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #000;
            border-radius: 50%;
            color: #FFD700;
            font-size: 1.2rem;
        }

        :root {
            --brand-dark: #1a1a1a;
            --brand-gray: #6c757d;
        }

        body {
            background-color: #ffffff;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }

        .hero-wrapper {
            min-height: 90vh;
            display: flex;
            align-items: center;
        }

        /* Feature List Styling */
        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .feature-icon {
            color: var(--brand-dark);
            font-size: 1.2rem;
            margin-right: 12px;
            line-height: 1;
        }

        /* Action Button */
        .btn-cta {
            background-color: var(--brand-dark);
            color: #fff;
            padding: 14px 32px;
            border-radius: 10px;
            font-weight: 600;
            transition: transform 0.2s ease;
        }

        .btn-cta:hover {
            background-color: #333;
            color: #fff;
            transform: translateY(-2px);
        }

        /* Tag Preview Card */
        .preview-container {
            border-radius: 24px;
            padding: 20px;
            background: #fff;
            transition: all 0.3s ease;
        }

        .tag-mockup {
            width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .branding-text {
            margin-top: 2rem;
        }

        .stat-icon {
            font-size: 2rem;
            color: var(--brand-purple);
            margin-bottom: 10px;
        }

        .stat-value {
            font-weight: 700;
            font-size: 41px;
        }

        .stat-label {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .testimonial-card {
            border: none;
            box-shadow: 0 .25rem 1.75rem rgba(30, 34, 40, .07) !important;

            border-radius: 8px;
            min-height: 200px;
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
        }

        .stars {
            color: #ffc107;
            font-size: 0.9rem;
        }

        .review-text {
            font-size: 0.9rem;
            line-height: 1.6;
            color: #444;
        }

        .source-tag {
            font-size: 0.85rem;
            font-weight: bold;
            color: #2c3e50;
            margin-top: auto;
        }

        .btn-soft-yellow {
            color: #ffc107;
            font-size: 45px;
        }


        /* footer */

         /* Illustration Section */
        .illustration-box {
            background-color: #ffffff;
            padding-top: 50px;
            text-align: center;
        }
        .illustration-box img {
            max-width: 100%;
            height: auto;
            /* Matches the width of the CTA banner below */
            max-height: 400px;
        }
 
        /* CTA Banner */
        .cta-banner {
            background-color: #838588;
            color: white;
            padding: 50px;
            border-radius: 8px;
            position: relative;
            z-index: 10;
            /* Negative margin pulls the footer up behind the banner */
            margin-bottom: -60px;
        }
 
        /* Footer */
        footer {
            background-color: #1c1f23;
            color: #ffffff;
            padding-top: 100px; /* Extra padding to clear the CTA overlap */
            padding-bottom: 40px;
        }
 
        .footer-link {
            color: #ffffff;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            font-size: 0.9rem;
            opacity: 0.8;
        }
        .footer-link:hover { opacity: 1; color: #fff; }
 
        .btn-download {
            background-color: #ff4d30;
            color: white;
            border: none;
            padding: 8px 16px;
            font-size: 0.8rem;
            font-weight: bold;
            border-radius: 4px;
        }
 
        .social-icons i {
            margin-right: 15px;
            font-size: 1.1rem;
            cursor: pointer;
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
    <!--  -->
    <div class="container my-5">
        <div class="product-card p-4 p-lg-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0 text-center">
                    <img src="public/images/thetags1.png" width="100%" height="auto" alt="Sampark QR Parking Tag Preview" class="img-fluid">
                </div>
                <div class="col-lg-5">
                    <p class="text-uppercase text-muted small fw-bold mb-2">Car and Bike Parking Tag</p>
                    <h1 class="display-6 fw-bold mb-4 text-dark">Privacy and Security at its Best, <br><span class="text-dark">NGF132 Vehicle Parking Tag.</span></h1>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h3 class="feature-title"><span class="number_coloe">1.</span> Private Contact</h3>
                            <p class="text-secondary small">Your contact details are not shared when someone contacts you.</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="feature-title"><span class="number_coloe">2.</span> WhatsApp Update</h3>
                            <p class="text-secondary small">Receive updates on your WhatsApp, SMS and also Masked Calls.</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="feature-title"><span class="number_coloe">3.</span> Upload Files</h3>
                            <p class="text-secondary small">Add your vehicle documents, access with OTP.</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="feature-title"><span class="number_coloe">4.</span> Emergency Call</h3>
                            <p class="text-secondary small">Add your emergency contact details in the tag.</p>
                        </div>
                    </div>

                    <div class="mt-5">
                        <img src="public/images/amazonbuy.png" width="30%" height="auto">

                        <button class="btn btn-buy-now w-100 d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-fill me-2" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
                            </svg>
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--  -->
    <section class="main2 py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 col-md-6">
                    <p class="product-tagline mb-2 text-uppercase">The Car Parking Tag.</p>
                    <h1 class="main-title display-p mb-4">Masked Calls, SMS, WhatsApp and Emergency Help.</h1>
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
                        <img src="public/images/amazonbuy.png" class="img-fluid" alt="Buy now on Amazon" width="30%" height="auto">
                    </div>
                    <div class="d-grid gap-2 col-md-8">
                        <button class="btn btn-yellow border-none fw-bold rounded-3" type="button">
                            <i class="bi bi-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 text-center">
                    <div class="phone-mockup-container position-relative">
                        <img src="public/images/phone_image.png" alt="NGF132 App Interface" class="phone-img rounded-4" width="200px" height="auto">
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
    <section class="feature-section container">
        <div class="text-center mb-5">
            <p class="text-uppercase text-muted small fw-bold mb-1">What we do?</p>
            <h2 class="display-6 fw-bold">Offline tags, Enable disable calls and <br class="d-none d-md-block"> More, Get APP to manage your tags.</h2>
        </div>

        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="position-relative text-center">
                    <img src="public/images/themore000.png" alt="App Interface" width="100%" height="auro" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-5">
                <h3 class="tag-title h2 mb-3">Car / Bike Parking tag</h3>
                <p class="text-muted mb-4">
                    Your contact details will not be shared, but anyone who has any issue
                    with your parked vehicle can contact you. We will send you WhatsApp,
                    SMS and Masked call.
                </p>
                <ul class="list-unstyled mb-4">
                    <li>
                        <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div> Calls + WhatsApp
                    </li>
                    <li>
                        <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div> Emergency Call
                    </li>
                    <li>
                        <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div> One time Buy
                    </li>
                    <li>
                        <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div> Vehicle IN and Out Logs
                    </li>
                    <li>
                        <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div> Fast Tag Recharge
                    </li>
                    <li>
                        <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div> Insurance and PUC reminders
                    </li>
                </ul>
                <a href="#" class="btn btn-dark-custom">More Details</a>
            </div>
        </div>
    </section>
    <main class="hero-wrapper py-5">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6 order-2 order-lg-1">
                    <h3 class="tag-title h2 mb-3">Get sampark tag for your business</h3>
                    <p class="text-muted mb-4">
                        Tag with your logo and name. Manage Vehicle logs and get special CRM.
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li>
                            <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div> Add your staff to manage vehicle logs
                        </li>
                        <li>
                            <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div>Get logo when scanned.
                        </li>
                        <li>
                            <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div> Get special CRM access to manage your tags
                        </li>
                        <li>
                            <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div> Increase customer loyalty and get branding
                        </li>
                        <li>
                            <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div> Dedicated support manager
                        </li>
                    </ul>
                    <a href="#" class="btn btn-dark-custom">Apply Now</a>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="preview-container text-center">
                        <img src="public/images/socit22.png" width="100%" height="auto" alt="Sampark Tag Mockup" class="tag-mockup mb-4">

                    </div>
                </div>

            </div>
        </div>
    </main>
    <!--  -->
    <section class="feature-section container">

        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="position-relative text-center">
                    <img src="public/images/8sui8.jpeg" alt="App Interface" width="100%" height="auro" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="tag-title h2 mb-3">Starter pack for Shops and Garages</h3>
                <p class="text-muted mb-4">
                    Get pack of 20 Car sampark tags for your shop or garage for only 2999 Rs. Try now. Customization with your logo available.
                </p>
                <ul class="list-unstyled mb-4">
                    <li>
                        <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div>Customize with your logo.
                    </li>
                    <li>
                        <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div> Get marketing materials
                    </li>
                    <li>
                        <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div>Training to sell to your customers
                    </li>
                    <li>
                        <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div> Counter top boxes
                    </li>
                    <li>
                        <div class="custom-check-badge me-2"><i class="fas fa-check btn_yellow_text"></i> </div> 60 Days Money back
                    </li>
                    <p class="text-muted mb-4">Sell / gift this customized car sampark tags to your customers build trust, Get repeat customers and build your own marketing system.</p>
                </ul>
                <a href="#" class="btn btn-dark-custom">Apply Now</a>
            </div>
        </div>
    </section>
    <div class="container py-5">
        <div class="row align-items-center mb-5 text-center text-md-start">
            <div class="col-md-4 mb-4 mb-md-0">
                <h2 class="fw-bold">We Make Tech,<br>for Privacy.</h2>
                <p class="text-muted">We are customer centric team.</p>
            </div>

            <div class="col-md-8">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="stat-icon">🎯</div>
                        <div class="stat-value">950,000+</div>
                        <div class="stat-label">Active tags</div>
                    </div>
                    <div class="col-4">
                        <div class="stat-icon">📈</div>
                        <div class="stat-value">4x</div>
                        <div class="stat-label">Revenue Growth</div>
                    </div>
                    <div class="col-4">
                        <div class="stat-icon">⭐</div>
                        <div class="stat-value">98.7%</div>
                        <div class="stat-label">Customer Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 p-4 testimonial-card">
                    <div class="stars mb-2"><i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p class="review-text">"Good idea and execution. Need to add option for calling also using virtual number system."</p>
                    <div class="source-tag">Google Review</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 p-4 testimonial-card">
                    <div class="stars mb-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>
                    <p class="review-text">"A must have for all vehicles. More and more people should start using this."</p>
                    <div class="source-tag">Amazon Customer</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 p-4 testimonial-card">
                    <div class="stars mb-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p class="review-text">"I love it. It's a wonderful product now u don't have to leave you number when your v."</p>
                    <div class="source-tag">Amazon Customer</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 p-4 testimonial-card">
                    <div class="stars mb-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p class="review-text">"Good idea and execution. Need to add option for calling also using virtual number system."</p>
                    <div class="source-tag">Google Review</div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5 bg-white">
        <div class="container text-center">
            <div class="mb-5">
                <h2 class="fw-normal">Checkout our products.</h2>
                <h2 class="fw-normal">Visit shop to buy and enter the world of privacy !</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card h-100 border-0">
                        <img src="{{asset('public/images/checkout-product-1.png')}}" class="img-fluid card-img-top p-3" alt="Car Sampark Tag Pack of 2">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text text-start">(Pack of 2) Car sampark tag. Let people call you for any
                                issues with your parked car.</p>
                            <p class="fw-bold text-start text-muted">₹ 499</p>
                            <button class="btn btn-warning w-100 mt-auto py-2 fw-semibold">
                                <i class="bi bi-cart"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0">
                        <img src="{{asset('public/images/checkout-product-3.jpeg')}}" class="img-fluid card-img-top p-3" alt="Bike Tags">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text text-start">2 NGF132 Bike Tags. (1 For Bike, 1 For Helmet ). Get Help in
                                emergency and Wrong Parking</p>
                            <p class="fw-bold text-start text-muted">₹ 499</p>
                            <button class="btn btn-warning w-100 mt-auto py-2 fw-semibold">
                                <i class="bi bi-cart"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0">
                        <img src="{{asset('public/images/checkout-product-2.png')}}" class="img-fluid card-img-top p-3" alt="Car Sampark Tag Pack of 1">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text text-start">(Pack of 1) Car sampark tag. Let people call you for any
                                issues with your parked car.</p>
                            <p class="fw-bold text-start text-muted">₹ 399</p>
                            <button class="btn btn-warning w-100 mt-auto py-2 fw-semibold">
                                <i class="bi bi-cart"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <button class="btn btn-dark px-5 py-2 fs-5" style="border-radius: 8px;">Shop</button>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h6 class="text-secondary fw-semibold text-uppercase small mb-3" style="letter-spacing: 1px;">
                        Something Special
                    </h6>
                    <h2 class="display-5 fw-bold mb-4" style="color: #2c3e50;">
                        Some of our Special Points.
                    </h2>
                    <p class="text-muted fs-5">
                        The NGF132, ALL in ONE APP, Brings the best features to manage your NGF132 tags.
                    </p>
                </div>

                <div class="col-lg-8">
                    <div class="row g-5 text-center">
                        <div class="col-6 col-md-3">
                            <i class="fa fa-car fa-3x"></i>
                            <p class="small fw-medium text-muted">Vehicle Insurance reminders</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <i class="fa fa-road fa-3x "></i>
                            <p class="small fw-medium text-muted">Boom Barrier Integration</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <i class="fa-duotone fa-solid fa-location-dot fa-3x"></i>
                            <p class="small fw-medium text-muted">Location Tracking</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <i class="fa fa-tint fa-3x"></i>
                            <p class="small fw-medium text-muted">Waterproof / Durable Tags</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <i class="fa fa-user-secret fa-3x"></i>
                            <p class="small fw-medium text-muted">Privacy</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <i class="fa fa-phone fa-3x"></i>
                            <p class="small fw-medium text-muted">Masked Calls</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <i class="fa fa-camera  fa-3x"></i>
                            <p class="small fw-medium text-muted">Video Calls</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <i class="fa fa-whatsapp fa-3x"></i>
                            <p class="small fw-medium text-muted">WhatsApp Integration</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="py-5" style="background-color: #f0f5ff; border-radius: 20px; overflow: hidden;">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                    <img src="public/images/902755120untitleddesignpng.png.png" class="img-fluid" alt="Sampark App Management"
                        style="max-height: 450px; width: auto;">
                </div>

                <div class="col-lg-6 ps-lg-5">
                    <h6 class="text-primary fw-bold text-uppercase mb-3" style="letter-spacing: 1px;">
                        MANAGE YOUR TAG FROM APP
                    </h6>
                    <h2 class="display-5 fw-bold mb-4" style="color: #2c3e50;">
                        APP Management
                    </h2>
                    <p class="lead text-muted mb-4" style="line-height: 1.8;">
                        Enable, disable calls, SMS, WhatsApp. Check scan locations, fasTag, download eTag on WhatsApp
                        and more. Manage your tag anytime anywhere, disable the complete tag or Transfer to a new owner.
                    </p>
                    <a href="#"
                        class="btn btn-link text-decoration-none fw-bold fs-5 p-0 text-primary d-inline-flex align-items-center">
                        Buy Now <span class="ms-2">→</span>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">

                <div class="col-md-6">
                    <div class="p-5 h-100 rounded-4 shadow-sm border-0 d-flex flex-column"
                        style="background-color: #f6faf9;">
                        <div class="mb-auto">
                            <h6 class="text-success fw-bold text-uppercase mb-3"
                                style="letter-spacing: 1px; font-size: 0.85rem;">Search</h6>
                            <h2 class="fw-bold mb-3">Search Any vehicle.</h2>
                            <p class="text-muted mb-4">Search for Any vehicle in india even without tag, Mask Call them
                                in case of any urgency with their car.</p>
                            <a href="#" class="btn btn-link text-decoration-none fw-bold p-0 text-success">
                                Download APP <span class="ms-1">→</span>
                            </a>
                        </div>
                        <div class="mt-4 text-center">
                            <img src="public/images/1111111.png" class="img-fluid rounded-top-4"
                                alt="Search Vehicle App Interface" style="max-height: 300px;">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-5 h-100 rounded-4 shadow-sm border-0 d-flex flex-column"
                        style="background-color: #fef6f7;">
                        <div class="mb-auto">
                            <h6 class="text-danger fw-bold text-uppercase mb-3"
                                style="letter-spacing: 1px; font-size: 0.85rem; opacity: 0.7;">Free Etag</h6>
                            <h2 class="fw-bold mb-3">Free PDF copy</h2>
                            <p class="text-muted mb-4">Get instant eTag delivery, Works even offline, Login to download
                                now. Get free replacement of physical tag.</p>
                            <a href="#" class="btn btn-link text-decoration-none fw-bold p-0 text-danger">
                                Login <span class="ms-1">→</span>
                            </a>
                        </div>
                        <div class="mt-4 text-center">
                            <img src="public/images/22222222.png" class="img-fluid rounded-top-4"
                                alt="Free PDF Copy Interface" style="max-height: 300px;">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="position-relative rounded-4 overflow-hidden shadow-sm">
                        <img src="public/images/resellrt222.png" width="100%" height="auto" class="img-fluid" alt="Franchise Event">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <button
                                class="btn btn-light rounded-circle d-flex align-items-center justify-content-center shadow"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-caret-right fa-3x"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ps-lg-5">
                    <h6 class="text-secondary fw-semibold text-uppercase small mb-2" style="letter-spacing: 1px;">
                        LET'S GET FRANCHISE AND WORK TOGETHER.
                    </h6>
                    <h2 class="display-6 fw-bold mb-5">Did you say, Franchise?</h2>

                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 d-flex align-items-start">
                            <div class="me-3"><i class="bi bi-lightbulb text-warning fs-3"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">2L Min Investment.</h6>
                                <p class="small text-muted">Start your reselling or franchise with 2L investment.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 d-flex align-items-start">
                            <div class="me-3"><i class="bi bi-people text-info fs-3"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Exclusive Rights</h6>
                                <p class="small text-muted">City wise exclusive rights.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 d-flex align-items-start">
                            <div class="me-3"><i class="bi bi-megaphone text-danger fs-3"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Free Marketing</h6>
                                <p class="small text-muted">We will cover your 50% marketing cost.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 d-flex align-items-start">
                            <div class="me-3"><i class="bi bi-box-seam text-primary fs-3"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Order fulfillment</h6>
                                <p class="small text-muted">We can full fill your orders on COD.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 d-flex align-items-start">
                            <div class="me-3"><i class="bi bi-person-badge text-success fs-3"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Dedicated Manager</h6>
                                <p class="small text-muted">Dedicated support to assist and grow.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 d-flex align-items-start">
                            <div class="me-3"><i class="bi bi-graph-up-arrow text-warning fs-3"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Sell assist</h6>
                                <p class="small text-muted">We will train your staff to sell and grow.</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center text-lg-end">
                        <a href="#" class="btn btn-warning px-4 py-2 fw-bold" style="border-radius: 8px;">
                            Talk to franchise manager
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-6">
                    <h1 class="display-6 mb-0" style="color: #2c3e50;">
                        Trusted by 950,000 users, Buy the tag today to join the world of privacy.
                    </h1>
                </div>
            </div>

            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <h2 class="display-5 fw-bold btn-soft-yellow mb-1">950,000+</h2>
                    <p class="text-muted fw-medium mb-0 text-uppercase small" style="letter-spacing: 1px;">Active users
                    </p>
                </div>
                <div class="col-md-4">
                    <h2 class="display-5 fw-bold btn-soft-yellow mb-1">100K+</h2>
                    <p class="text-muted fw-medium mb-0 text-uppercase small" style="letter-spacing: 1px;">APP Downloads
                    </p>
                </div>
                <div class="col-md-4">
                    <h2 class="display-5 fw-bold btn-soft-yellow mb-1">4x</h2>
                    <p class="text-muted fw-medium mb-0 text-uppercase small" style="letter-spacing: 1px;">Revenue
                        Growth</p>
                </div>
                <div class="col-md-12 mt-5 text-center">
                    <button class="btn btn-warning px-4 py-2 fw-bold shadow-sm" style="border-radius: 10px;">
                        Invest in us (40 CR Valuation)
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="illustration-box">
    <div class="container">
        <img src="images/cta-banner.jpg" alt="Team Illustration">
    </div>
</section>
 
<div class="container">
    <div class="cta-banner d-flex justify-content-between align-items-center flex-wrap shadow-lg">
        <div class="mb-3 mb-md-0">
            <h2 class="fw-bold h1 mb-1">950,000 Registered User in India.</h2>
            <h3 class="fw-light">Join the Revolution today !</h3>
        </div>
        <button class="btn btn-light btn-lg px-5 py-2 fw-bold text-dark">Shop Now</button>
    </div>
</div>
 
<footer>
    <div class="container">
        <div class="row g-5">
           
            <div class="col-lg-3 col-md-6">
               <img src="public/images/logo1.png" width="60%" height="auto">
                </div>
                <div class="small opacity-75">
                    <p class="mb-0">© 2026 NGFI32.</p>
                    <p class="mb-3">All rights reserved.<br>NGFI32 Pvt Ltd</p>
                </div>
                <div class="social-icons">
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
 
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3">Get in Touch</h6>
                <div class="small opacity-75">
                    <p class="mb-1">GCC Noida, India</p>
                    <p class="mb-3">UP 201301</p>
                    <p class="mb-1">hello@ngfi32.com</p>
                    <p class="mb-3">+91 9034 6644 87</p>
                    <hr class="w-75 border-secondary">
                    <p><img src="public/images/amazonbuy.png" width="20" class="me-2"> Update location</p>
                </div>
            </div>
 
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3">Learn More</h6>
                <a href="#" class="footer-link">About Us</a>
                <a href="#" class="footer-link">Contact</a>
                <a href="#" class="footer-link">Terms of Use</a>
                <a href="#" class="footer-link">Privacy Policy</a>
                <a href="#" class="footer-link">Franchise Management</a>
            </div>
 
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3">Company</h6>
                <a href="#" class="footer-link">Business Terms</a>
                <a href="#" class="footer-link">Refund</a>
                <a href="#" class="footer-link">Shipping</a>
                <button class="btn btn-download mb-3 mt-2">Download Brochure</button>
                <div class="d-flex gap-2">
                    <img src="public/images/amazonbuy.png" height="30" alt="Play Store">
                    <img src="public/images/app.png" height="30" alt="App Store">
                </div>
            </div>
 
        </div>
    </div>
</footer>
 
</body>

</html>
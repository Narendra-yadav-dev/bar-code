@extends('front.app')
@section('content')
<scetion class="main section-frame">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent w-100">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#">
                <img src="public/images/logo.png" width="90" height="90" alt="Logo">
            </a>
            <a class="nav-link text-dark me-lg-5 mobile_view" href="{{route('reader')}}">QR Code Reader</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end mobile_sidebaar_bg_color" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-dark" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 text-uppercase small">
                        <li class="nav-item"><a class="nav-link text-dark me-lg-5" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-dark me-lg-5" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link text-dark me-lg-5" href="#">Products</a></li>
                        <li class="nav-item"><a class="nav-link text-dark me-lg-5 desktop_view" href="{{route('reader')}}">QR Code Reader</a></li>
                    </ul>
                    <div class="d-lg-none mt-3 text-dark">
                        <i class="fi fi-in"></i> India (IN)
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block text-dark">
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
            <h2 class="fw-normal">Car QR Code Tag, Features.</h2>
        </div>
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="feature-icon d-flex align-items-center justify-content-center bg-black-car">
                    <i class="fa fa-car text-warning"></i>
                </div>
                <h3 class="feature-title">Car & Bike QR Code tag</h3>
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
    <div class="product-card py-4">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-lg-0 text-center">
                <img src="public/images/rock-banner.png" width="100%" height="auto" alt="Rock ID QR Parking Tag Preview" class="img-fluid thetags1">
            </div>
            <div class="col-lg-5">
                <p class="text-uppercase text-muted small mb-2">Car and Bike Parking Tag</p>
                <h1 class="display-6 mb-4 text-dark">Privacy and Security at its Best, <br><span class="text-dark">Rock ID Vehicle Parking Tag.</span></h1>
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

                <div class="mt-3">
                    <img src="public/images/amazonbuy.png" width="30%" height="auto">
                    <button class="btn btn-buy-now w-100 d-flex align-items-center justify-content-center mt-3">
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
                    <button class="btn btn-buy-now w-100 d-flex align-items-center justify-content-center mt-3" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-fill me-2" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
                        </svg> Add to Cart
                    </button>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 text-center">
                <div class="phone-mockup-container position-relative">
                    <img src="public/images/rock-banner-2.png" alt="NGF132 App Interface" class="phone-img rounded-4" width="100%" height="auto">
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
        <div class="row p-5">
            <div class="col-md-3 text-center social">
                <div class="p-3 shadow-sm border rounded-3 h-100 d-flex align-items-center justify-content-center">
                    <img src="public/images/amazonbuy.png" class="img-fluid" alt="Buy now on Amazon" width="80%" height="auto">
                </div>
            </div>
            <div class="col-md-3 text-center social">
                <div class="p-3 shadow-sm border rounded-3 h-100 d-flex align-items-center justify-content-center">
                    <img src="public/images/flipkart.png" class="img-fluid" alt="Flipkart" width="80%" height="auto">
                </div>
            </div>
            <div class="col-md-3 text-center social">
                <div class="p-3 shadow-sm border rounded-3 h-100 d-flex align-items-center justify-content-center">
                    <img src="public/images/google.png" class="img-fluid" alt="Get it on Google Play" width="80%" height="auto">
                </div>
            </div>
            <div class="col-md-3 text-center social">
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
        <h2 class="display-6">Offline tags, Enable disable calls and <br class="d-none d-md-block"> More, Get APP to manage your tags.</h2>
    </div>

    <div class="row align-items-center g-5">
        <div class="col-lg-7">
            <div class="position-relative text-center">
                <img src="public/images/rock-banner-3.png" alt="App Interface" width="100%" height="auro" class="img-fluid offline-tags">
            </div>
        </div>
        <div class="col-lg-5 parking-tag">
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

            <div class="col-lg-6 order-2 order-lg-1 text-center">
                <h3 class="tag-title h2 mb-3">Get Rock ID tag for your business</h3>
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
                    <img src="public/images/rock-banner-4.png" width="100%" height="auto" alt="Rock ID Tag Mockup" class="tag-mockup mb-4">

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
                <img src="public/images/rock-banner.png" alt="App Interface" width="100%" height="auro" class="img-fluid feature-section-image">
            </div>
        </div>
        <div class="col-lg-6 text-center">
            <h3 class="tag-title h2 mb-3">Starter pack for Shops and Garages</h3>
            <p class="text-muted mb-4">
                Get pack of 20 Car Rock ID tags for your shop or garage for only 2999 Rs. Try now. Customization with your logo available.
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
                <p class="text-muted mb-4">Sell / gift this customized car Rock ID tags to your customers build trust, Get repeat customers and build your own marketing system.</p>
            </ul>
            <a href="#" class="btn btn-dark-custom">Apply Now</a>
        </div>
    </div>
</section>
<div class="container py-5">
    <div class="row align-items-center mb-5 text-center text-md-start">
        <div class="col-md-4 mb-4 mb-md-0">
            <h2>We Make Tech,<br>for Privacy.</h2>
            <p class="text-muted">We are customer centric team.</p>
        </div>

        <div class="col-md-8">
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 customer-centric">
                    <div class="stat-icon"><img src="public/images/active-tag.png" alt=""></div>
                    <div class="stat-value">950,000+</div>
                    <div class="stat-label">Active tags</div>
                </div>
                <div class="col-md-4 col-sm-6 customer-centric">
                    <div class="stat-icon"><img src="public/images/reniew-growth.jpg" alt=""></div>
                    <div class="stat-value">4x</div>
                    <div class="stat-label">Revenue Growth</div>
                </div>
                <div class="col-md-4 col-sm-6 customer-centric">
                    <div class="stat-icon"><img src="public/images/customer.jpg" alt=""></div>
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
                    <img src="{{asset('public/images/rock-banner.png')}}" class="img-fluid card-img-top p-3" alt="Car Rock ID Tag Pack of 2">
                    <div class="card-body d-flex flex-column p-0">
                        <p class="card-text text-start fw-bold">(Pack of 2) Car Rock ID tag. Let people call you for any
                            issues with your parked car.</p>
                        <p class="fw-bold text-start text-muted">₹ 499</p>
                        <button class="btn btn-warning text-dark add-to-cart">
                            <i class="bi bi-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0">
                    <img src="{{asset('public/images/rock-banner-3.png')}}" class="img-fluid card-img-top p-3" alt="Bike Tags">
                    <div class="card-body d-flex flex-column p-0">
                        <p class="card-text text-start fw-bold">2 NGF132 Bike Tags. (1 For Bike, 1 For Helmet ). Get Help in
                            emergency and Wrong Parking</p>
                        <p class="fw-bold text-start text-muted">₹ 499</p>
                        <button class="btn btn-warning text-dark add-to-cart">
                            <i class="bi bi-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0">
                    <img src="{{asset('public/images/rock-banner-2.png')}}" class="img-fluid card-img-top p-3" alt="Car Rock ID Tag Pack of 1">
                    <div class="card-body d-flex flex-column p-0">
                        <p class="card-text text-start fw-bold">(Pack of 1) Car Rock ID tag. Let people call you for any
                            issues with your parked car.</p>
                        <p class="fw-bold text-start text-muted">₹ 399</p>
                        <button class="btn btn-warning text-dark add-to-cart">
                            <i class="bi bi-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <button class="btn btn-dark w-25 add-to-cart">Shop</button>
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
                <h2 class="special-points">
                    Some of our Special Points.
                </h2>
                <p class="text-muted best-feature">
                    The Rock ID, ALL in ONE APP, Brings the best features to manage your Rock ID tags.
                </p>
            </div>

            <div class="col-lg-8">
                <div class="row g-5 text-center">
                    <div class="col-6 col-md-3">
                        <img class="special-points-img" src="public/images/Vehicle Insurance reminders.png" alt="">
                        <p class="small fw-medium text-muted">Vehicle Insurance reminders</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <img class="special-points-img" src="public/images/Boom Barrier Integration.jpg" alt="">
                        <p class="small fw-medium text-muted">Boom Barrier Integration</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <img class="special-points-img" src="public/images/Location Tracking.png" alt="">
                        <p class="small fw-medium text-muted">Location Tracking</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <img class="special-points-img" src="public/images/Waterproof  Durable Tags.png" alt="">
                        <p class="small fw-medium text-muted">Waterproof / Durable Tags</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <img class="special-points-img" src="public/images/privacy.webp" alt="">
                        <p class="small fw-medium text-muted">Privacy</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <img class="special-points-img" src="public/images/Masked Calls.png" alt="">
                        <p class="small fw-medium text-muted">Masked Calls</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <img class="special-points-img" src="public/images/Video Calls.png" alt="">
                        <p class="small fw-medium text-muted">Video Calls</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <img class="special-points-img" src="public/images/WhatsApp Integration.jpg" alt="">
                        <p class="small fw-medium text-muted">WhatsApp Integration</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="py-5 app-management-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                <img src="public/images/rock-banner-4.png" class="img-fluid" alt="Rock ID App Management" width="100%">
            </div>

            <div class="col-lg-6 ps-lg-5">
                <h6 class="text-uppercase mb-3 manage-your-tag">
                    MANAGE YOUR TAG FROM APP
                </h6>
                <h2 class="display-5 mb-4 app-management">
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
                <div class="free-tag h-100 rounded-4 shadow-sm border-0 d-flex flex-column"
                    style="background-color: #f6faf9;">
                    <div class="mb-auto">
                        <h6 class="text-success text-uppercase mb-3"
                            style="letter-spacing: 1px; font-size: 0.85rem;">Search</h6>
                        <h2 class="mb-3">Search Any vehicle.</h2>
                        <p class="text-muted mb-4">Search for Any vehicle in india even without tag, Mask Call them
                            in case of any urgency with their car.</p>
                        <a href="#" class="btn btn-link text-decoration-none p-0 text-success">
                            Download APP <span class="ms-1">→</span>
                        </a>
                    </div>
                    <div class="mt-4 text-center">
                        <img src="public/images/rock-banner.png" class="img-fluid rounded-top-4"
                            alt="Search Vehicle App Interface" width="100%">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="free-tag h-100 rounded-4 shadow-sm border-0 d-flex flex-column"
                    style="background-color: #fef6f7;">
                    <div class="mb-auto">
                        <h6 class="text-danger text-uppercase mb-3"
                            style="letter-spacing: 1px; font-size: 0.85rem; opacity: 0.7;">Free Etag</h6>
                        <h2 class="mb-3">Free PDF copy</h2>
                        <p class="text-muted mb-4">Get instant eTag delivery, Works even offline, Login to download
                            now. Get free replacement of physical tag.</p>
                        <a href="#" class="btn btn-link text-decoration-none p-0 text-danger">
                            Login <span class="ms-1">→</span>
                        </a>
                    </div>
                    <div class="mt-4 text-center">
                        <img src="public/images/rock-banner-2.png" class="img-fluid rounded-top-4"
                            alt="Free PDF Copy Interface" width="100%">
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
                    <img src="public/images/rock-banner-3.png" width="100%" height="auto" class="img-fluid" alt="Franchise Event">
                </div>
            </div>

            <div class="col-lg-6 ps-lg-5">
                <h6 class="text-secondary fw-semibold text-uppercase small mb-2" style="letter-spacing: 1px;">
                    LET'S GET FRANCHISE AND WORK TOGETHER.
                </h6>
                <h2 class="display-6 mb-5">Did you say, Franchise?</h2>

                <div class="row g-4 mb-5">
                    <div class="col-sm-6 d-flex align-items-start">
                        <div class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" data-inject-url="https://ngf132.com/assets/theme/web/img/icons/solid/lamp.svg" class="svg-inject icon-svg icon-svg-xs solid-duo text-purple-pink me-4">
                                <path class="fill-secondary" d="M128 36.86a8 8 0 01-8-8V8a8 8 0 0116 0v20.86a8 8 0 01-8 8zm70.1 29.04a8 8 0 01-5.67-13.64l14.77-14.77a8 8 0 1111.31 11.31l-14.77 14.77a8 8 0 01-5.64 2.33zM248 136h-20.86a8 8 0 010-16H248a8 8 0 010 16zm-35.15 84.85a8.06 8.06 0 01-5.67-2.34l-14.76-14.77a8 8 0 0111.31-11.31l14.77 14.77a8 8 0 010 11.31 7.92 7.92 0 01-5.65 2.34zm-169.7 0a8 8 0 01-5.66-13.65l14.77-14.77a8 8 0 0111.31 11.31L48.8 218.51a7.93 7.93 0 01-5.65 2.34zM28.86 136H8a8 8 0 010-16h20.86a8 8 0 110 16zM57.9 65.9a8 8 0 01-5.66-2.33L37.47 48.8a8 8 0 1111.31-11.31l14.77 14.77A8 8 0 0157.9 65.9z"></path>
                                <path class="fill-primary" d="M160 224v13.33A18.76 18.76 0 01141.33 256h-26.67c-9 0-18.66-6.83-18.66-21.76V224zm15-154a74.93 74.93 0 00-63-15c-28.27 5.91-51.2 29-57.07 57.21a74.74 74.74 0 0028.16 75.41A32.19 32.19 0 0195.25 208v.12A2 2 0 0196 208h64a.93.93 0 01.53.11V208c1.49-8.11 6.29-15.57 13.65-21.33A74.72 74.72 0 00175 70zm-7 63.36a8.06 8.06 0 01-8-8A29.32 29.32 0 00130.67 96a8 8 0 110-16A45.43 45.43 0 01176 125.33a8.06 8.06 0 01-8 8z"></path>
                                <path class="fill-secondary" d="M95.25 208H96a1.8 1.8 0 00-.75.11z"></path>
                                <path class="fill-primary" d="M160.53 208v.11a.93.93 0 00-.53-.11z"></path>
                            </svg>
                        </div>
                        <div>
                            <h6 class="mb-1">2L Min Investment.</h6>
                            <p class="small text-muted">Start your reselling or franchise with 2L investment.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex align-items-start">
                        <div class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 255.98" data-inject-url="https://ngf132.com/assets/theme/web/img/icons/solid/bulb.svg" class="svg-inject icon-svg icon-svg-xs solid-duo text-purple-pink me-4">
                                <circle class="fill-primary" cx="58.67" cy="149.31" r="32"></circle>
                                <path class="fill-primary" d="M88 202.65H29.33A29.36 29.36 0 000 232v16a8 8 0 008 8h101.33a8 8 0 008-8v-16A29.36 29.36 0 0088 202.65z"></path>
                                <circle class="fill-primary" cx="197.33" cy="149.31" r="32"></circle>
                                <path class="fill-primary" d="M226.67 202.65H168A29.36 29.36 0 00138.67 232v16a8 8 0 008 8H248a8 8 0 008-8v-16a29.36 29.36 0 00-29.33-29.35z"></path>
                                <path class="fill-secondary" d="M149.76 108.48v7.68A11.9 11.9 0 01137.81 128h-19.63c-5.76 0-12-4.27-12-13.76v-5.76zM176 47.68a47.26 47.26 0 01-17.6 36.91 22.89 22.89 0 00-8.32 13.23H106a20 20 0 00-7.79-12.69A47.13 47.13 0 0180 46.73C80.53 21.34 101.76.33 127.25 0a47.34 47.34 0 0134.56 13.88A46.82 46.82 0 01176 47.68z"></path>
                            </svg>
                        </div>
                        <div>
                            <h6 class="mb-1">Exclusive Rights</h6>
                            <p class="small text-muted">City wise exclusive rights.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex align-items-start">
                        <div class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 255.97 256" data-inject-url="https://ngf132.com/assets/theme/web/img/icons/solid/puzzle.svg" class="svg-inject icon-svg icon-svg-xs solid-duo text-purple-pink me-4">
                                <path class="fill-secondary" d="M221.86 91a33.65 33.65 0 01-22.72-8.75v40.21h-27.2a43.26 43.26 0 003.73-17.71 44.8 44.8 0 10-86 17.71H56.85v-111A11.42 11.42 0 0168.26 0h119.47a11.42 11.42 0 0111.41 11.41v20.05A34.1 34.1 0 11221.86 91z"></path>
                                <path class="fill-primary" d="M142.79 181.25a34.13 34.13 0 0033.55 40.62 33.66 33.66 0 0022.75-8.77v31.52A11.41 11.41 0 01187.72 256H68.28a11.41 11.41 0 01-11.38-11.38V213.1a34.12 34.12 0 11-22.75-59.5 33.71 33.71 0 0122.75 8.77v-29.2H112a34.12 34.12 0 1137.76 0h49.37v29.2a34.09 34.09 0 00-56.3 18.88z"></path>
                            </svg>
                        </div>
                        <div>
                            <h6 class="mb-1">Free Marketing</h6>
                            <p class="small text-muted">We will cover your 50% marketing cost.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex align-items-start">
                        <div class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 255.98" data-inject-url="https://ngf132.com/assets/theme/web/img/icons/solid/bulb.svg" class="svg-inject icon-svg icon-svg-xs solid-duo text-purple-pink me-4">
                                <circle class="fill-primary" cx="58.67" cy="149.31" r="32"></circle>
                                <path class="fill-primary" d="M88 202.65H29.33A29.36 29.36 0 000 232v16a8 8 0 008 8h101.33a8 8 0 008-8v-16A29.36 29.36 0 0088 202.65z"></path>
                                <circle class="fill-primary" cx="197.33" cy="149.31" r="32"></circle>
                                <path class="fill-primary" d="M226.67 202.65H168A29.36 29.36 0 00138.67 232v16a8 8 0 008 8H248a8 8 0 008-8v-16a29.36 29.36 0 00-29.33-29.35z"></path>
                                <path class="fill-secondary" d="M149.76 108.48v7.68A11.9 11.9 0 01137.81 128h-19.63c-5.76 0-12-4.27-12-13.76v-5.76zM176 47.68a47.26 47.26 0 01-17.6 36.91 22.89 22.89 0 00-8.32 13.23H106a20 20 0 00-7.79-12.69A47.13 47.13 0 0180 46.73C80.53 21.34 101.76.33 127.25 0a47.34 47.34 0 0134.56 13.88A46.82 46.82 0 01176 47.68z"></path>
                            </svg>
                        </div>
                        <div>
                            <h6 class="mb-1">Order fulfillment</h6>
                            <p class="small text-muted">We can full fill your orders on COD.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex align-items-start">
                        <div class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" data-inject-url="https://ngf132.com/assets/theme/web/img/icons/solid/lamp.svg" class="svg-inject icon-svg icon-svg-xs solid-duo text-purple-pink me-4">
                                <path class="fill-secondary" d="M128 36.86a8 8 0 01-8-8V8a8 8 0 0116 0v20.86a8 8 0 01-8 8zm70.1 29.04a8 8 0 01-5.67-13.64l14.77-14.77a8 8 0 1111.31 11.31l-14.77 14.77a8 8 0 01-5.64 2.33zM248 136h-20.86a8 8 0 010-16H248a8 8 0 010 16zm-35.15 84.85a8.06 8.06 0 01-5.67-2.34l-14.76-14.77a8 8 0 0111.31-11.31l14.77 14.77a8 8 0 010 11.31 7.92 7.92 0 01-5.65 2.34zm-169.7 0a8 8 0 01-5.66-13.65l14.77-14.77a8 8 0 0111.31 11.31L48.8 218.51a7.93 7.93 0 01-5.65 2.34zM28.86 136H8a8 8 0 010-16h20.86a8 8 0 110 16zM57.9 65.9a8 8 0 01-5.66-2.33L37.47 48.8a8 8 0 1111.31-11.31l14.77 14.77A8 8 0 0157.9 65.9z"></path>
                                <path class="fill-primary" d="M160 224v13.33A18.76 18.76 0 01141.33 256h-26.67c-9 0-18.66-6.83-18.66-21.76V224zm15-154a74.93 74.93 0 00-63-15c-28.27 5.91-51.2 29-57.07 57.21a74.74 74.74 0 0028.16 75.41A32.19 32.19 0 0195.25 208v.12A2 2 0 0196 208h64a.93.93 0 01.53.11V208c1.49-8.11 6.29-15.57 13.65-21.33A74.72 74.72 0 00175 70zm-7 63.36a8.06 8.06 0 01-8-8A29.32 29.32 0 00130.67 96a8 8 0 110-16A45.43 45.43 0 01176 125.33a8.06 8.06 0 01-8 8z"></path>
                                <path class="fill-secondary" d="M95.25 208H96a1.8 1.8 0 00-.75.11z"></path>
                                <path class="fill-primary" d="M160.53 208v.11a.93.93 0 00-.53-.11z"></path>
                            </svg>
                        </div>
                        <div>
                            <h6 class="mb-1">Dedicated Manager</h6>
                            <p class="small text-muted">Dedicated support to assist and grow.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex align-items-start">
                        <div class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 255.98" data-inject-url="https://ngf132.com/assets/theme/web/img/icons/solid/bulb.svg" class="svg-inject icon-svg icon-svg-xs solid-duo text-purple-pink me-4">
                                <circle class="fill-primary" cx="58.67" cy="149.31" r="32"></circle>
                                <path class="fill-primary" d="M88 202.65H29.33A29.36 29.36 0 000 232v16a8 8 0 008 8h101.33a8 8 0 008-8v-16A29.36 29.36 0 0088 202.65z"></path>
                                <circle class="fill-primary" cx="197.33" cy="149.31" r="32"></circle>
                                <path class="fill-primary" d="M226.67 202.65H168A29.36 29.36 0 00138.67 232v16a8 8 0 008 8H248a8 8 0 008-8v-16a29.36 29.36 0 00-29.33-29.35z"></path>
                                <path class="fill-secondary" d="M149.76 108.48v7.68A11.9 11.9 0 01137.81 128h-19.63c-5.76 0-12-4.27-12-13.76v-5.76zM176 47.68a47.26 47.26 0 01-17.6 36.91 22.89 22.89 0 00-8.32 13.23H106a20 20 0 00-7.79-12.69A47.13 47.13 0 0180 46.73C80.53 21.34 101.76.33 127.25 0a47.34 47.34 0 0134.56 13.88A46.82 46.82 0 01176 47.68z"></path>
                            </svg>
                        </div>
                        <div>
                            <h6 class="mb-1">Sell assist</h6>
                            <p class="small text-muted">We will train your staff to sell and grow.</p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="#" class="btn btn-warning text-dark px-4 py-2" style="border-radius: 8px;">
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
            <div class="col-lg-6 text-center">
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
                <button class="btn btn-warning text-dark" style="border-radius: 10px;">
                    Invest in us (40 CR Valuation)
                </button>
            </div>
        </div>
    </div>
</section>

@endsection
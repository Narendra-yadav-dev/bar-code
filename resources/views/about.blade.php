@extends('front.app')
@section('content')
<scetion class="main section-frame">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent w-100">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="{{route('index')}}">
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
                        <li class="nav-item"><a class="nav-link text-dark me-lg-5" href="{{route('index')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-dark me-lg-5" href="{{route('about')}}">About</a></li>
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
</scetion>
<section>
    <div class="container">
        <div class="row">
            <h2 class="mt-5 mb-3">About Us</h2>
            <p>Rock ID is a smart digital identification solution designed to help people protect and recover their valuable belongings and loved ones. Using secure QR code technology, Rock ID makes it easy to share essential information instantly during emergencies or when items are lost.</p>
            <p>With Rock ID, users can create digital profiles for luggage, vehicles, children, pets, and personal IDs. When a QR code is scanned, the relevant information is displayed clearly on the screen, allowing quick contact with the owner while keeping personal details safe and privacy-protected.</p>
            <p>Our goal is simple: make safety, identification, and recovery faster and smarter. Rock ID is easy to use, affordable, and built for real-life situations—whether it’s a lost bag, a wrongly parked vehicle, or an emergency case.</p>
            <p>Rock ID is not just a QR code; it’s a reliable digital safety companion for everyday life.</p>
        </div>
    </div>
</section>
@endsection
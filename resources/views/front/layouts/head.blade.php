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
</head>
<style>
    body {
        color: #020202;
        font-family: Urbanist;
    }

    .hero-section {
        background: linear-gradient(rgb(0 0 0 / 30%), rgba(0, 0, 0, 0.6)), url('public/images/rock-banner-3.png');
        background-size: cover;
        background-position: center;
        min-height: 75vh;
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
        background-color: #ffffff !important;
    }
    .mobile_view{
        display: none;
    }
    .desktop_view{
        display: block;
    }

    @media (max-width: 991px) {
        .responsive_class {
            padding: 0px;
        }
    .hero-section{
        min-height: 100%;
        padding: 50px 0;
    }
    .mobile_view{
        display: block;
    }
    .desktop_view{
        display: none;
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
        .thetags1{
            width: 100%;
            height: 100%;
        }
        .phone-img{
            width: 100%;
        }
        .social{
            margin-bottom: 20px;
        }
        .offline-tags{
            width: 100%;
        }
        .parking-tag{
            text-align: center;
            align-items: center;
            margin-left: 20px;
            padding-right: 50px;
        }
        .customer-centric{
            margin-bottom: 20px;
        }
        .cta-banner{
            margin: 0 0 -60px 0;
        }
        footer {
            text-align: center;
        }
        .amazon-app-store{
            justify-content: center;
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

 .navbar.bg-transparent
{
  background-color: #ffffff !important;
}
.navbar .navbar-toggler{
  background-color: #0f0c29 !important;
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
        font-size: 18px;
        font-weight: 500;
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
.illustration-box figure{
    padding: 0;
    margin: 0;
}
    .illustration-box img {
        opacity: 0.7;
        margin: auto;
    }

    /* CTA Banner */
    .cta-banner {
        background-color: #838588;
        color: white;
        padding: 50px;
        border-radius: 8px;
        position: relative;
        z-index: 10;
            position: relative;
    transform: translateY(-50%);
        margin: auto;
    width: 77%;
    bottom: 0;
    }

    /* Footer */
    footer {
        background-color: #1c1f23;
        color: #ffffff;
        position: relative;
        /* padding-top: 100px; */
        /* Extra padding to clear the CTA overlap */
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

    .footer-link:hover {
        opacity: 1;
        color: #fff;
    }

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

    .stat-icon img {
        height: 60px;
    }

    .card-img-top {
        border-radius: 25px;
    }

    .add-to-cart {
        border-radius: 10px;
    }

    .special-points-img {
        height: 100px;
    }

    .best-feature {
        font-size: 28px !important;
    }

    .special-points {
        font-size: 51px !important;
        color: #2c3e50;
    }

    .app-management {
        color: #2c3e50;
        font-size: 30px;
    }

    .manage-your-tag {
        font-size: 18px !important;
    }

    .app-management-section {
        border-radius: 20px;
        overflow: hidden;
    }

    .free-tag {
        padding: 50px 50px 0 50px;
    }

    .icon-svg {
        width: 34px;
        height: 34px;
        display: inline-block;
    }

    .fill-primary {
        fill: #e7e23f;
        /* purple */
    }

    .fill-secondary {
        fill: #e7bbbb;
        /* orange / pink */
    }
</style>

<body>
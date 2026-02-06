<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Services</title>
    <link rel="stylesheet" href="{{ asset('public/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('public/images/favicon.png') }}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"> -->

    <style>
        .header_bg_color {
            background-color: rgb(223 227 220 / 79%) !important;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background-color: rgb(177 179 175 / 86%) !important;
        }

        svg {
            max-width: 100%;
            height: auto;
        }

        .card {
            transition: transform 0.2s;
            border: 1px solid #ddd;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .button_bg_color:hover {
            color: #fff;
        }

        .button_bg_color {
            background: #31639b;
            background: linear-gradient(119deg, #3378a9 0%, #469b58 100%);
            color: white;
        }

        .card_a {
            background-color: #3d8b7f94;
        }

        .card_b {
            background-color: #377f9a96;
        }

        .card_c {
            background-color: #3a858b8c;
        }

        .card_d {
            background-color: #43956599;
        }

        @media (max-width: 991px) {
            .destop_responsive {
                display: none !important;
            }

            section.main.py-5 {
                padding: 0px !important;
            }

            .destop_responsive_h_text {
                font-size: 28px !important;
            }

            .destop_responsive_p_text {
                font-size: 28px !important;
            }

            .destop_responsive_img_text {
                width: 150px !important;
                height: 150px !important;
            }
        }

        @media (min-width: 992px) {
            .mobile_responsive {
                display: none !important;
            }

        }
    </style>
</head>

<body>
    <header class="header-container header_bg_color">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 mb-3 mb-md-0 text-center">
                    <a href="index.php" class="text-decoration-none text-white">
                        <img src="{{asset('public/images/logo1.png')}}" width="100px" height="auto">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section class="main py-5">
        <div class="container">
            <div
                class="col-12 col-lg-4 d-flex align-items-center justify-content-center order-last order-lg-0 py-4 py-lg-0 mobile_responsive">
                <div class="text-center">
                    <button type="button" class="btn button_bg_color btn-lg px-5">Scan Qr Code</button>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="card h-100 shadow-sm card_a">
                        <h5 class="text-center my-3 destop_responsive_h_text"><i class="mdi mdi-dog-side menu-icon me-2"></i>Dogs</h5>
                        <div class="text-center px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="destop_responsive_img_text" viewBox="0 0 50 50" width="100" height="100">
                                <rect x="0" y="0" width="50" height="50" fill="#ffffff"></rect>
                                <g transform="scale(1.724)">
                                    <g transform="translate(0,0)">
                                        <path fill-rule="evenodd"
                                            d="M10 0L10 2L11 2L11 0ZM12 0L12 1L13 1L13 2L12 2L12 4L13 4L13 5L11 5L11 6L10 6L10 4L11 4L11 3L8 3L8 4L9 4L9 5L8 5L8 7L9 7L9 8L6 8L6 9L5 9L5 8L0 8L0 10L1 10L1 9L2 9L2 15L0 15L0 16L1 16L1 17L0 17L0 21L1 21L1 17L3 17L3 16L2 16L2 15L3 15L3 14L4 14L4 17L9 17L9 18L10 18L10 22L9 22L9 19L7 19L7 18L4 18L4 19L7 19L7 20L6 20L6 21L8 21L8 23L10 23L10 24L11 24L11 25L10 25L10 28L12 28L12 29L13 29L13 27L16 27L16 28L17 28L17 29L18 29L18 28L17 28L17 27L16 27L16 26L15 26L15 24L14 24L14 26L13 26L13 24L12 24L12 23L13 23L13 22L15 22L15 23L16 23L16 24L17 24L17 25L18 25L18 27L20 27L20 28L21 28L21 29L22 29L22 28L21 28L21 25L25 25L25 26L22 26L22 27L23 27L23 29L24 29L24 27L25 27L25 28L26 28L26 29L27 29L27 28L28 28L28 26L29 26L29 24L28 24L28 23L27 23L27 22L29 22L29 20L28 20L28 19L27 19L27 16L28 16L28 15L27 15L27 12L28 12L28 11L27 11L27 12L25 12L25 13L21 13L21 12L22 12L22 11L23 11L23 12L24 12L24 11L25 11L25 9L26 9L26 8L25 8L25 9L24 9L24 8L23 8L23 9L22 9L22 8L21 8L21 4L18 4L18 3L17 3L17 2L18 2L18 1L20 1L20 2L19 2L19 3L20 3L20 2L21 2L21 0L16 0L16 1L15 1L15 0L14 0L14 1L13 1L13 0ZM8 1L8 2L9 2L9 1ZM14 1L14 2L13 2L13 3L14 3L14 5L13 5L13 7L12 7L12 6L11 6L11 7L12 7L12 9L11 9L11 8L10 8L10 9L9 9L9 10L8 10L8 9L6 9L6 10L8 10L8 13L9 13L9 14L8 14L8 16L9 16L9 17L10 17L10 18L11 18L11 22L10 22L10 23L11 23L11 22L13 22L13 21L14 21L14 20L15 20L15 19L14 19L14 18L19 18L19 19L16 19L16 20L18 20L18 21L15 21L15 22L18 22L18 21L19 21L19 22L20 22L20 20L22 20L22 19L23 19L23 20L24 20L24 19L25 19L25 21L26 21L26 20L27 20L27 19L25 19L25 18L24 18L24 19L23 19L23 18L22 18L22 17L26 17L26 16L27 16L27 15L26 15L26 13L25 13L25 16L24 16L24 15L23 15L23 16L22 16L22 14L21 14L21 15L20 15L20 14L18 14L18 15L17 15L17 16L15 16L15 17L14 17L14 15L12 15L12 17L10 17L10 16L11 16L11 14L14 14L14 13L15 13L15 11L14 11L14 10L16 10L16 11L17 11L17 12L16 12L16 13L17 13L17 12L19 12L19 13L20 13L20 12L21 12L21 8L20 8L20 5L18 5L18 4L17 4L17 3L16 3L16 2L15 2L15 1ZM14 2L14 3L15 3L15 4L16 4L16 5L14 5L14 9L12 9L12 10L14 10L14 9L15 9L15 6L16 6L16 8L17 8L17 9L16 9L16 10L17 10L17 9L18 9L18 10L20 10L20 8L19 8L19 6L18 6L18 8L17 8L17 4L16 4L16 3L15 3L15 2ZM9 6L9 7L10 7L10 6ZM18 8L18 9L19 9L19 8ZM27 8L27 9L28 9L28 10L29 10L29 9L28 9L28 8ZM10 9L10 11L11 11L11 9ZM4 10L4 11L3 11L3 12L4 12L4 14L5 14L5 10ZM23 10L23 11L24 11L24 10ZM0 11L0 12L1 12L1 11ZM6 11L6 12L7 12L7 11ZM12 11L12 13L14 13L14 12L13 12L13 11ZM19 11L19 12L20 12L20 11ZM9 12L9 13L11 13L11 12ZM6 13L6 14L7 14L7 13ZM28 13L28 14L29 14L29 13ZM5 15L5 16L7 16L7 15ZM9 15L9 16L10 16L10 15ZM17 16L17 17L18 17L18 16ZM12 17L12 18L14 18L14 17ZM19 17L19 18L21 18L21 19L22 19L22 18L21 18L21 17ZM28 17L28 18L29 18L29 17ZM2 18L2 21L5 21L5 20L3 20L3 18ZM12 19L12 21L13 21L13 19ZM19 19L19 20L20 20L20 19ZM21 21L21 24L24 24L24 21ZM22 22L22 23L23 23L23 22ZM17 23L17 24L18 24L18 25L20 25L20 24L19 24L19 23ZM26 23L26 24L25 24L25 25L26 25L26 24L27 24L27 25L28 25L28 24L27 24L27 23ZM8 24L8 29L9 29L9 24ZM11 25L11 27L12 27L12 25ZM25 26L25 27L26 27L26 28L27 28L27 26ZM14 28L14 29L15 29L15 28ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM22 0L22 7L29 7L29 0ZM23 1L23 6L28 6L28 1ZM24 2L24 5L27 5L27 2ZM0 22L0 29L7 29L7 22ZM1 23L1 28L6 28L6 23ZM2 24L2 27L5 27L5 24Z"
                                            fill="#000000"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <p class="text-center small mt-3 px-2 destop_responsive_p_text">Emergency contact: Scan here.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="card h-100 shadow-sm card_b">
                        <h5 class="text-center my-3 destop_responsive_h_text"><i class="mdi mdi-car menu-icon me-2"></i>Car</h5>
                        <div class="text-center px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="destop_responsive_img_text" viewBox="0 0 50 50" width="100" height="100">
                                <rect x="0" y="0" width="50" height="50" fill="#ffffff" class="destop_responsive_img_text"></rect>
                                <g transform="scale(1.724)">
                                    <path
                                        d="M10 0L10 1L8 1L8 3L9 3L9 4L8 4L8 8L6 8L6 9L4 9L4 8L3 8L3 9L2 9L2 8L0 8L0 10L1 10L1 9L2 9L2 11L3 11L3 9L4 9L4 12L5 12L5 13L4 13L4 14L2 14L2 15L4 15L4 14L6 14L6 15L5 15L5 16L4 16L4 17L3 17L3 16L2 16L2 17L3 17L3 18L2 18L2 19L4 19L4 21L5 21L5 19L4 19L4 17L5 17L5 16L6 16L6 17L7 17L7 18L6 18L6 19L7 19L7 18L9 18L9 19L8 19L8 20L9 20L9 21L8 21L8 23L9 23L9 22L12 22L12 21L10 21L10 18L11 18L11 19L12 19L12 20L13 20L13 17L14 17L14 19L15 19L15 17L16 17L16 16L17 16L17 17L18 17L18 18L16 18L16 20L20 20L20 21L19 21L19 22L18 22L18 21L17 21L17 22L16 22L16 24L15 24L15 20L14 20L14 22L13 22L13 24L12 24L12 25L10 25L10 24L11 24L11 23L10 23L10 24L9 24L9 25L8 25L8 26L9 26L9 27L8 27L8 29L10 29L10 28L9 28L9 27L11 27L11 26L12 26L12 28L11 28L11 29L16 29L16 28L17 28L17 29L18 29L18 28L19 28L19 29L21 29L21 27L22 27L22 26L24 26L24 28L23 28L23 29L24 29L24 28L25 28L25 29L26 29L26 28L25 28L25 26L28 26L28 27L27 27L27 29L28 29L28 27L29 27L29 26L28 26L28 25L25 25L25 20L24 20L24 17L22 17L22 16L24 16L24 15L25 15L25 17L26 17L26 15L27 15L27 17L28 17L28 18L27 18L27 20L26 20L26 22L27 22L27 23L26 23L26 24L27 24L27 23L28 23L28 24L29 24L29 23L28 23L28 22L29 22L29 21L27 21L27 20L29 20L29 17L28 17L28 15L29 15L29 14L27 14L27 13L29 13L29 12L28 12L28 10L29 10L29 9L28 9L28 8L26 8L26 9L25 9L25 8L22 8L22 9L21 9L21 10L19 10L19 11L18 11L18 12L17 12L17 11L16 11L16 12L15 12L15 14L14 14L14 13L13 13L13 14L14 14L14 15L13 15L13 16L12 16L12 12L14 12L14 9L15 9L15 10L18 10L18 9L17 9L17 8L18 8L18 7L19 7L19 6L20 6L20 8L19 8L19 9L20 9L20 8L21 8L21 6L20 6L20 5L19 5L19 4L20 4L20 2L21 2L21 1L20 1L20 0L13 0L13 1L14 1L14 3L12 3L12 7L11 7L11 4L10 4L10 3L9 3L9 2L11 2L11 0ZM16 1L16 3L17 3L17 7L16 7L16 6L15 6L15 5L16 5L16 4L15 4L15 5L14 5L14 4L13 4L13 7L12 7L12 8L13 8L13 9L14 9L14 6L15 6L15 7L16 7L16 8L15 8L15 9L16 9L16 8L17 8L17 7L18 7L18 3L19 3L19 2L20 2L20 1L19 1L19 2L18 2L18 1ZM17 2L17 3L18 3L18 2ZM9 5L9 8L8 8L8 9L6 9L6 10L7 10L7 11L6 11L6 12L7 12L7 11L8 11L8 12L9 12L9 14L8 14L8 15L6 15L6 16L7 16L7 17L9 17L9 18L10 18L10 17L11 17L11 18L12 18L12 16L10 16L10 17L9 17L9 14L11 14L11 13L10 13L10 12L9 12L9 11L11 11L11 8L10 8L10 5ZM9 9L9 10L10 10L10 9ZM23 9L23 11L22 11L22 10L21 10L21 11L22 11L22 12L23 12L23 13L22 13L22 15L20 15L20 14L19 14L19 13L21 13L21 12L20 12L20 11L19 11L19 13L16 13L16 14L15 14L15 15L14 15L14 17L15 17L15 15L20 15L20 16L22 16L22 15L24 15L24 14L25 14L25 15L26 15L26 13L27 13L27 12L26 12L26 13L25 13L25 12L23 12L23 11L24 11L24 10L25 10L25 9ZM26 9L26 10L28 10L28 9ZM0 11L0 12L1 12L1 11ZM6 13L6 14L7 14L7 13ZM0 14L0 15L1 15L1 14ZM0 16L0 17L1 17L1 16ZM18 16L18 17L19 17L19 19L20 19L20 20L23 20L23 19L22 19L22 17L19 17L19 16ZM0 18L0 19L1 19L1 18ZM20 18L20 19L21 19L21 18ZM25 18L25 19L26 19L26 18ZM0 20L0 21L1 21L1 20ZM2 20L2 21L3 21L3 20ZM6 20L6 21L7 21L7 20ZM21 21L21 24L24 24L24 21ZM19 22L19 24L18 24L18 23L17 23L17 24L18 24L18 26L19 26L19 25L20 25L20 22ZM22 22L22 23L23 23L23 22ZM13 24L13 27L15 27L15 28L16 28L16 25L15 25L15 24ZM14 25L14 26L15 26L15 25ZM21 25L21 26L22 26L22 25ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM22 0L22 7L29 7L29 0ZM23 1L23 6L28 6L28 1ZM24 2L24 5L27 5L27 2ZM0 22L0 29L7 29L7 22ZM1 23L1 28L6 28L6 23ZM2 24L2 27L5 27L5 24Z"
                                        fill="#000000" fill-rule="evenodd" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center small mt-3 px-2 destop_responsive_p_text">Scan to call owner (number protected)</p>
                    </div>
                </div>
                <div
                    class="col-12 col-lg-4 d-flex align-items-center justify-content-center order-last order-lg-0 py-4 py-lg-0 destop_responsive">
                    <div class="text-center">
                        <button type="button" class="btn button_bg_color btn-lg px-5" id="startScan">Scan Qr Code</button>
                        <div id="reader" style="width:300px; display:none;" class="scan_qr_code mt-3"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="card h-100 shadow-sm card_c">
                        <h5 class="text-center my-3 destop_responsive_h_text"><i class="mdi mdi-bike menu-icon me-2"></i>Bike</h5>
                        <div class="text-center px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="destop_responsive_img_text" viewBox="0 0 50 50" width="100" height="100">
                                <rect x="0" y="0" width="50" height="50" fill="#ffffff" class="destop_responsive_img_text"></rect>
                                <g transform="scale(1.724)">
                                    <path
                                        d="M10 0L10 1L8 1L8 3L9 3L9 4L8 4L8 8L6 8L6 9L4 9L4 8L3 8L3 9L2 9L2 8L0 8L0 10L1 10L1 9L2 9L2 11L3 11L3 9L4 9L4 12L5 12L5 13L4 13L4 14L2 14L2 15L4 15L4 14L6 14L6 15L5 15L5 16L4 16L4 17L3 17L3 16L2 16L2 17L3 17L3 18L2 18L2 19L4 19L4 21L5 21L5 19L4 19L4 17L5 17L5 16L6 16L6 17L7 17L7 18L6 18L6 19L7 19L7 18L9 18L9 19L8 19L8 20L9 20L9 21L8 21L8 23L9 23L9 22L12 22L12 21L10 21L10 18L11 18L11 19L12 19L12 20L13 20L13 17L14 17L14 19L15 19L15 17L16 17L16 16L17 16L17 17L18 17L18 18L16 18L16 20L20 20L20 21L19 21L19 22L18 22L18 21L17 21L17 22L16 22L16 24L15 24L15 20L14 20L14 22L13 22L13 24L12 24L12 25L10 25L10 24L11 24L11 23L10 23L10 24L9 24L9 25L8 25L8 26L9 26L9 27L8 27L8 29L10 29L10 28L9 28L9 27L11 27L11 26L12 26L12 28L11 28L11 29L16 29L16 28L17 28L17 29L18 29L18 28L19 28L19 29L21 29L21 27L22 27L22 26L24 26L24 28L23 28L23 29L24 29L24 28L25 28L25 29L26 29L26 28L25 28L25 26L28 26L28 27L27 27L27 29L28 29L28 27L29 27L29 26L28 26L28 25L25 25L25 20L24 20L24 17L22 17L22 16L24 16L24 15L25 15L25 17L26 17L26 15L27 15L27 17L28 17L28 18L27 18L27 20L26 20L26 22L27 22L27 23L26 23L26 24L27 24L27 23L28 23L28 24L29 24L29 23L28 23L28 22L29 22L29 21L27 21L27 20L29 20L29 17L28 17L28 15L29 15L29 14L27 14L27 13L29 13L29 12L28 12L28 10L29 10L29 9L28 9L28 8L26 8L26 9L25 9L25 8L22 8L22 9L21 9L21 10L19 10L19 11L18 11L18 12L17 12L17 11L16 11L16 12L15 12L15 14L14 14L14 13L13 13L13 14L14 14L14 15L13 15L13 16L12 16L12 12L14 12L14 9L15 9L15 10L18 10L18 9L17 9L17 8L18 8L18 7L19 7L19 6L20 6L20 8L19 8L19 9L20 9L20 8L21 8L21 6L20 6L20 5L19 5L19 4L20 4L20 2L21 2L21 1L20 1L20 0L13 0L13 1L14 1L14 3L12 3L12 7L11 7L11 4L10 4L10 3L9 3L9 2L11 2L11 0ZM16 1L16 3L17 3L17 7L16 7L16 6L15 6L15 5L16 5L16 4L15 4L15 5L14 5L14 4L13 4L13 7L12 7L12 8L13 8L13 9L14 9L14 6L15 6L15 7L16 7L16 8L15 8L15 9L16 9L16 8L17 8L17 7L18 7L18 3L19 3L19 2L20 2L20 1L19 1L19 2L18 2L18 1ZM17 2L17 3L18 3L18 2ZM9 5L9 8L8 8L8 9L6 9L6 10L7 10L7 11L6 11L6 12L7 12L7 11L8 11L8 12L9 12L9 14L8 14L8 15L6 15L6 16L7 16L7 17L9 17L9 18L10 18L10 17L11 17L11 18L12 18L12 16L10 16L10 17L9 17L9 14L11 14L11 13L10 13L10 12L9 12L9 11L11 11L11 8L10 8L10 5ZM9 9L9 10L10 10L10 9ZM23 9L23 11L22 11L22 10L21 10L21 11L22 11L22 12L23 12L23 13L22 13L22 15L20 15L20 14L19 14L19 13L21 13L21 12L20 12L20 11L19 11L19 13L16 13L16 14L15 14L15 15L14 15L14 17L15 17L15 15L20 15L20 16L22 16L22 15L24 15L24 14L25 14L25 15L26 15L26 13L27 13L27 12L26 12L26 13L25 13L25 12L23 12L23 11L24 11L24 10L25 10L25 9ZM26 9L26 10L28 10L28 9ZM0 11L0 12L1 12L1 11ZM6 13L6 14L7 14L7 13ZM0 14L0 15L1 15L1 14ZM0 16L0 17L1 17L1 16ZM18 16L18 17L19 17L19 19L20 19L20 20L23 20L23 19L22 19L22 17L19 17L19 16ZM0 18L0 19L1 19L1 18ZM20 18L20 19L21 19L21 18ZM25 18L25 19L26 19L26 18ZM0 20L0 21L1 21L1 20ZM2 20L2 21L3 21L3 20ZM6 20L6 21L7 21L7 20ZM21 21L21 24L24 24L24 21ZM19 22L19 24L18 24L18 23L17 23L17 24L18 24L18 26L19 26L19 25L20 25L20 22ZM22 22L22 23L23 23L23 22ZM13 24L13 27L15 27L15 28L16 28L16 25L15 25L15 24ZM14 25L14 26L15 26L15 25ZM21 25L21 26L22 26L22 25ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM22 0L22 7L29 7L29 0ZM23 1L23 6L28 6L28 1ZM24 2L24 5L27 5L27 2ZM0 22L0 29L7 29L7 22ZM1 23L1 28L6 28L6 23ZM2 24L2 27L5 27L5 24Z"
                                        fill="#000000" fill-rule="evenodd" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center small mt-3 px-2 destop_responsive_p_text">Scan to Contact Owner</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="card h-100 shadow-sm card_d">
                        <h5 class="text-center my-3 destop_responsive_h_text"><i class="mdi mdi-bag-suitcase menu-icon me-2"></i>Luggage</h5>
                        <div class="text-center px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="destop_responsive_img_text" viewBox="0 0 50 50" width="100" height="100">
                                <rect x="0" y="0" width="50" height="50" fill="#ffffff" class="destop_responsive_img_text"></rect>
                                <g transform="scale(1.724)">
                                    <path
                                        d="M10 0L10 1L8 1L8 3L9 3L9 4L8 4L8 8L6 8L6 9L4 9L4 8L3 8L3 9L2 9L2 8L0 8L0 10L1 10L1 9L2 9L2 11L3 11L3 9L4 9L4 12L5 12L5 13L4 13L4 14L2 14L2 15L4 15L4 14L6 14L6 15L5 15L5 16L4 16L4 17L3 17L3 16L2 16L2 17L3 17L3 18L2 18L2 19L4 19L4 21L5 21L5 19L4 19L4 17L5 17L5 16L6 16L6 17L7 17L7 18L6 18L6 19L7 19L7 18L9 18L9 19L8 19L8 20L9 20L9 21L8 21L8 23L9 23L9 22L12 22L12 21L10 21L10 18L11 18L11 19L12 19L12 20L13 20L13 17L14 17L14 19L15 19L15 17L16 17L16 16L17 16L17 17L18 17L18 18L16 18L16 20L20 20L20 21L19 21L19 22L18 22L18 21L17 21L17 22L16 22L16 24L15 24L15 20L14 20L14 22L13 22L13 24L12 24L12 25L10 25L10 24L11 24L11 23L10 23L10 24L9 24L9 25L8 25L8 26L9 26L9 27L8 27L8 29L10 29L10 28L9 28L9 27L11 27L11 26L12 26L12 28L11 28L11 29L16 29L16 28L17 28L17 29L18 29L18 28L19 28L19 29L21 29L21 27L22 27L22 26L24 26L24 28L23 28L23 29L24 29L24 28L25 28L25 29L26 29L26 28L25 28L25 26L28 26L28 27L27 27L27 29L28 29L28 27L29 27L29 26L28 26L28 25L25 25L25 20L24 20L24 17L22 17L22 16L24 16L24 15L25 15L25 17L26 17L26 15L27 15L27 17L28 17L28 18L27 18L27 20L26 20L26 22L27 22L27 23L26 23L26 24L27 24L27 23L28 23L28 24L29 24L29 23L28 23L28 22L29 22L29 21L27 21L27 20L29 20L29 17L28 17L28 15L29 15L29 14L27 14L27 13L29 13L29 12L28 12L28 10L29 10L29 9L28 9L28 8L26 8L26 9L25 9L25 8L22 8L22 9L21 9L21 10L19 10L19 11L18 11L18 12L17 12L17 11L16 11L16 12L15 12L15 14L14 14L14 13L13 13L13 14L14 14L14 15L13 15L13 16L12 16L12 12L14 12L14 9L15 9L15 10L18 10L18 9L17 9L17 8L18 8L18 7L19 7L19 6L20 6L20 8L19 8L19 9L20 9L20 8L21 8L21 6L20 6L20 5L19 5L19 4L20 4L20 2L21 2L21 1L20 1L20 0L13 0L13 1L14 1L14 3L12 3L12 7L11 7L11 4L10 4L10 3L9 3L9 2L11 2L11 0ZM16 1L16 3L17 3L17 7L16 7L16 6L15 6L15 5L16 5L16 4L15 4L15 5L14 5L14 4L13 4L13 7L12 7L12 8L13 8L13 9L14 9L14 6L15 6L15 7L16 7L16 8L15 8L15 9L16 9L16 8L17 8L17 7L18 7L18 3L19 3L19 2L20 2L20 1L19 1L19 2L18 2L18 1ZM17 2L17 3L18 3L18 2ZM9 5L9 8L8 8L8 9L6 9L6 10L7 10L7 11L6 11L6 12L7 12L7 11L8 11L8 12L9 12L9 14L8 14L8 15L6 15L6 16L7 16L7 17L9 17L9 18L10 18L10 17L11 17L11 18L12 18L12 16L10 16L10 17L9 17L9 14L11 14L11 13L10 13L10 12L9 12L9 11L11 11L11 8L10 8L10 5ZM9 9L9 10L10 10L10 9ZM23 9L23 11L22 11L22 10L21 10L21 11L22 11L22 12L23 12L23 13L22 13L22 15L20 15L20 14L19 14L19 13L21 13L21 12L20 12L20 11L19 11L19 13L16 13L16 14L15 14L15 15L14 15L14 17L15 17L15 15L20 15L20 16L22 16L22 15L24 15L24 14L25 14L25 15L26 15L26 13L27 13L27 12L26 12L26 13L25 13L25 12L23 12L23 11L24 11L24 10L25 10L25 9ZM26 9L26 10L28 10L28 9ZM0 11L0 12L1 12L1 11ZM6 13L6 14L7 14L7 13ZM0 14L0 15L1 15L1 14ZM0 16L0 17L1 17L1 16ZM18 16L18 17L19 17L19 19L20 19L20 20L23 20L23 19L22 19L22 17L19 17L19 16ZM0 18L0 19L1 19L1 18ZM20 18L20 19L21 19L21 18ZM25 18L25 19L26 19L26 18ZM0 20L0 21L1 21L1 20ZM2 20L2 21L3 21L3 20ZM6 20L6 21L7 21L7 20ZM21 21L21 24L24 24L24 21ZM19 22L19 24L18 24L18 23L17 23L17 24L18 24L18 26L19 26L19 25L20 25L20 22ZM22 22L22 23L23 23L23 22ZM13 24L13 27L15 27L15 28L16 28L16 25L15 25L15 24ZM14 25L14 26L15 26L15 25ZM21 25L21 26L22 26L22 25ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM22 0L22 7L29 7L29 0ZM23 1L23 6L28 6L28 1ZM24 2L24 5L27 5L27 2ZM0 22L0 29L7 29L7 22ZM1 23L1 28L6 28L6 23ZM2 24L2 27L5 27L5 24Z"
                                        fill="#000000" fill-rule="evenodd" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-center small mt-3 px-2 destop_responsive_p_text">Scan for Safe Return</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/html5-qrcode"></script>

    <script src="{{ asset('public/vendors/js/vendor.bundle.base.js') }}"></script>

    <script src="{{ asset('public/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('public/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

    <script src="{{ asset('public/js/off-canvas.js') }}"></script>
    <script src="{{ asset('public/js/misc.js') }}"></script>
    <script src="{{ asset('public/js/settings.js') }}"></script>
    <script src="{{ asset('public/js/todolist.js') }}"></script>
    <script src="{{ asset('public/js/jquery.cookie.js') }}"></script>
    <script>
        const scanBtn = document.getElementById('startScan');
        const readerDiv = document.getElementById('reader');

        scanBtn.addEventListener('click', () => {
            readerDiv.style.display = 'block';

            const html5QrCode = new Html5Qrcode("reader");

            html5QrCode.start({
                    facingMode: "environment"
                }, // back camera
                {
                    fps: 10,
                    qrbox: 250
                },
                qrCodeMessage => {
                    console.log("QR Code:", qrCodeMessage);

                    html5QrCode.stop();
                    window.location.href = qrCodeMessage;
                },
                errorMessage => {}
            );
        });
    </script>
</body>

</html>
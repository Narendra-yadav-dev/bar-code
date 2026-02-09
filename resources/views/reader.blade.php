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
    <link rel="shortcut icon" href="{{ asset('public/images/logo.png') }}">

    <style>
        /* Your previous styles here... */

        #reader {
            width: 100%;
            max-width: 400px;
            height: 300px;
            margin: 10px auto;
        }
    </style>
</head>

<body>
    <header class="header-container header_bg_color">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 mb-3 mb-md-0 text-center">
                    <a href="{{ url('/') }}" class="text-decoration-none text-white">
                        <img src="{{ asset('public/images/logo.png') }}" width="100px" height="auto">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="main py-5">
        <div class="container">
            <!-- QR Scan Button -->
            <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center order-last order-lg-0 py-4 py-lg-0 destop_responsive">
                <div class="text-center">
                    <button type="button" class="btn btn-success button_bg_color btn-lg px-5" id="startScan">Scan Qr Code</button>
                    <button type="button" class="btn btn-danger btn-sm mt-2" id="stopScan" style="display:none;">Stop Scan</button>
                    <div id="reader" style="display:none;" class="scan_qr_code mt-3"></div>
                </div>
            </div>

            <!-- Your cards here... -->
        </div>
    </section>

    <!-- Scripts -->
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
        const stopBtn = document.getElementById('stopScan');
        const readerDiv = document.getElementById('reader');
        let html5QrCode;

        scanBtn.addEventListener('click', () => {
            readerDiv.style.display = 'block';
            stopBtn.style.display = 'inline-block';

            html5QrCode = new Html5Qrcode("reader");

            Html5Qrcode.getCameras().then(cameras => {
                if (cameras && cameras.length) {
                    const cameraId = cameras[0].id; // back camera
                    html5QrCode.start(
                        cameraId,
                        { fps: 10, qrbox: 250 },
                        qrCodeMessage => {
                            console.log("QR Code:", qrCodeMessage);
                            html5QrCode.stop();
                            window.location.href = qrCodeMessage;
                        },
                        errorMessage => {
                            // Ignore errors, or you can log them
                        }
                    ).catch(err => {
                        console.error("Unable to start scanning:", err);
                        alert("Camera access denied or not available.");
                    });
                } else {
                    alert("No camera found on this device.");
                }
            }).catch(err => {
                console.error("Camera error:", err);
                alert("Camera access denied or not available.");
            });
        });

        stopBtn.addEventListener('click', () => {
            if (html5QrCode) {
                html5QrCode.stop().then(() => {
                    readerDiv.style.display = 'none';
                    stopBtn.style.display = 'none';
                }).catch(err => {
                    console.error("Stop failed:", err);
                });
            }
        });
    </script>
</body>
</html>

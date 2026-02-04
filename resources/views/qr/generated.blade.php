@extends('layouts.app')

@section('title', isset($qr_code) ? 'Edit QR Code' : 'Create QR Code')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-qrcode"></i>
            </span>
            QR Codes
        </h3>
    </div>

    <div class="card">
        <div class="card-body">
            <button id="startScan">Scan QR Code</button>
            <div id="reader" style="width:300px; display:none;"></div>
        </div>
    </div>
</div>
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

@endsection
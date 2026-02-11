@extends('layouts.app')

@section('title', 'QR Code')

@section('content')
<style> 
    body {
        font-family: Arial, sans-serif;
        background: #fff;
    }

    .qr-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
    }

    .qr-card {
        border-radius: 14px;
        padding: 14px;
        color: #fff;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* remove fixed height for print */
        height: auto;
        overflow: visible; /* ensure QR code is not cut */
    }

    .qr-card .title {
        font-size: 14px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .qr-card .qr-box {
        background: #fff;
        padding: 2px;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .qr-card .qr-box svg {
        width: 100%;   /* make responsive */
        height: auto;
        max-width: 120px; /* keep max size */
    }

    .qr-card .footer {
        font-size: 11px;
        line-height: 1.4;
    }

    /* 🎨 Category colors */
    .bike { background: #e74c3c; }
    .car { background: #2980b9; }
    .dogs { background: #27ae60; }
    .luggage { background: #8e44ad; }

    @media print {

        /* A4 page setup */
        @page {
            size: A4;
            margin: 10mm;
        }

        body {
            margin: 0;
            background: #fff;
        }

        body * {
            visibility: hidden;
        }

        #print-area,
        #print-area * {
            visibility: visible;
        }

        /* A4 grid: 3 × 3 */
        #print-area {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-auto-rows: auto;
            gap: 10mm;
        }

        /* Card sizing */
        .qr-card {
            width: 100%;
            height: 85mm; /* FIXED height for sticker */
            border-radius: 14px;
            padding: 10px;
            text-align: center;
            color: #fff;
            page-break-inside: avoid;
            break-inside: avoid;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .qr-card .title {
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 1.2;
        }

        .qr-card .qr-box {
            background: #fff;
            padding: 6px;
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .qr-card .qr-box svg {
            width: 120px;
            height: 120px;
        }

        /* Force page break after every 9 cards */
        .qr-card:nth-child(4n) {
            page-break-after: always;
        }

        /* Category colors */
        .bike { background: #e74c3c !important; }
        .car { background: #2980b9 !important; }
        .dogs { background: #27ae60 !important; }
        .luggage { background: #8e44ad !important; }
    }

</style>

<div class="content-wrapper">

    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </span> QR Code
        </h3>

    </div>

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-success btn-social-icon-text" onclick="window.print()">Print</button>
                </div>
                <div class="card-body">
                    <div id="print-area" class="qr-grid">
                        @foreach($qrCodes as $qr)
                        @php
                        $categoryClass = strtolower($qr->categories->name ?? 'default');
                        @endphp
                        <div class="qr-card {{ $categoryClass }}">
                            <div class="title">
                                <p>{{ $qr->categories->name ?? 'QR CARD' }}</p>
                                <p>Scan for Owner Details</p>
                            </div>
                            <div class="qr-box">
                                {!! QrCode::size(120)->generate(url('/scan/'.$qr->rock_id)) !!}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
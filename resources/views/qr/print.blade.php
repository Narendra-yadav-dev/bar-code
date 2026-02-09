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
        height: 260px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .qr-card .title {
        font-size: 14px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .qr-card .qr-box {
        background: #fff;
        padding: 10px;
        border-radius: 10px;
    }

    .qr-card .qr-box svg {
        width: 120px;
        height: 120px;
    }

    .qr-card .footer {
        font-size: 11px;
        line-height: 1.4;
    }

    /* 🎨 Category colors */
    .bike {
        background: #e74c3c;
    }

    /* red */
    .car {
        background: #2980b9;
    }

    /* blue */
    .dogs {
        background: #27ae60;
    }

    /* green */
    .luggage {
        background: #8e44ad;
    }

    /* purple */

    @media print {
        body * {
        visibility: hidden;
            }

            #print-area,
            #print-area * {
                visibility: visible;
            }

            #print-area {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                border: 1px solid #000
            }
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
                    <div class="qr-grid" id="print-area">
                        @foreach($qrCodes as $qr)
                        @php
                        $categoryClass = strtolower($qr->categories->name ?? 'default');
                        @endphp
                        <div class="qr-card {{ $categoryClass }}" >
                            <div class="title">
                                {{ $qr->categories->name ?? 'QR CARD' }}
                            </div>
                            <div class="qr-box">
                                {!! QrCode::generate(url('/scan/'.$qr->rock_id)) !!}
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
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
</head>
<style>
    body {
        background: #f4f6f9;
    }

    .header_bg_color {
        background-color: rgb(223 227 220 / 79%) !important;
    }

    .contact-icon {
        width: 40px;
        height: 40px;
        background-color: rgb(177 179 175 / 86%) !important;
    }

    .page-header {
        justify-content: center;
        margin-bottom: 20px;
    }

    .register-card {
        max-width: 700px;
        margin: auto;
        border-radius: 14px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border: none;
    }

    .category-icon {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        color: #fff;
        margin: auto;
        margin-bottom: 10px;
    }

    .dogs {
        background: #ff6b6b;
    }

    .car {
        background: #4dabf7;
    }

    .bike {
        background: #51cf66;
    }

    .luggage {
        background: #93b180;
    }

    .detail-row {
        padding: 10px 0;
        border-bottom: 1px dashed #ddd;
    }

    .detail-row:last-child {
        border-bottom: none;
    }

    .detail-label {
        font-weight: 600;
        color: #555;
    }

    .detail-value {
        color: #222;
    }

    .btn-primary {
        padding: 10px 30px;
        border-radius: 30px;
    }
    .back-btn{
        background-color: #31785882;
        border: none;
        height: 50px;
        padding-top: 18px;
    }
    .back-btn:hover{
        background-color: #31785882;
    }
    .content-wrapper{
        padding-top: 20px;
    }
    .card-body{
        text-align: center;
    }
</style>

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
    <div class="content-wrapper">
        <div class="text-center mb-4">
            <div class="category-icon {{ $qr->categories->slug }}">
                @if($qr->categories->slug == 'dogs')
                <i class="mdi mdi-dog-side"></i>
                @elseif($qr->categories->slug == 'car')
                <i class="mdi mdi-car"></i>
                @elseif($qr->categories->slug == 'bike')
                <i class="mdi mdi-bike"></i>
                @elseif($qr->categories->slug == 'luggage')
                <i class="mdi mdi-bag-suitcase"></i>
                @endif
            </div>

            <h4 class="fw-bold mt-2">
                {{ $qr->categories->name }} Registered
            </h4>
            <p class="text-muted small">
                Below are the registered details linked to this QR code
            </p>
        </div>

        <div class="card register-card">
            <div class="card-body">
                @if($item->image)
                <div class="mb-4 text-center">
                    <img src="{{ asset('public/images/'.$item->image) }}"
                        class="img-fluid rounded"
                        style="max-height:250px;">
                </div>
                @endif
                @if($qr->categories->slug === 'luggage')
                <div class="mb-3">
                    <strong>Luggage Type:</strong>
                    <div>{{ $item->extra_data['luggage_type'] ?? '-' }}</div>
                </div>
                @else
                <div class="mb-3">
                    <strong>
                        {{ $qr->categories->slug === 'dogs' ? 'Dog Name' : 'Product Name' }}:
                    </strong>
                    <div>{{ $item->name }}</div>
                </div>
                @endif

                <div class="mb-3">
                    <strong>Owner Name:</strong>
                    <div>{{ $item->owner_name }}</div>
                </div>
                @if(in_array($qr->categories->slug, ['car','bike']))
                <div class="mb-3">
                    <strong>Vehicle Number:</strong>
                    <div>{{ $item->extra_data['vehical_number'] ?? '-' }}</div>
                </div>

                <div class="mb-3">
                    <strong>Product Model:</strong>
                    <div>{{ $item->extra_data['product_model'] ?? '-' }}</div>
                </div>

                <div class="mb-3">
                    <strong>Product Color:</strong>
                    <div>{{ $item->extra_data['product_color'] ?? '-' }}</div>
                </div>
                @endif

                @if($qr->categories->slug === 'dogs')
                <div class="mb-3">
                    <strong>Breed:</strong>
                    <div>{{ $item->extra_data['breed'] ?? '-' }}</div>
                </div>

                <div class="mb-3">
                    <strong>Color:</strong>
                    <div>{{ $item->extra_data['color'] ?? '-' }}</div>
                </div>

                <div class="mb-3">
                    <strong>Gender:</strong>
                    <div>{{ ucfirst($item->extra_data['gender'] ?? '-') }}</div>
                </div>
                @endif

                @if($qr->categories->slug === 'luggage')
                <div class="mb-3">
                    <strong>Description:</strong>
                    <div>{{ $item->extra_data['description'] ?? '-' }}</div>
                </div>
                @endif
                <hr>
                <div class="mb-3">
                    <strong>Mobile Number:</strong>
                    <div>{{ $item->phone }}</div>
                </div>

                <div class="mb-3">
                    <strong>Alternate Mobile Number:</strong>
                    <div>{{ $item->extra_data['alternate_phone'] ?? '-' }}</div>
                </div>

                <div class="mb-3">
                    <strong>Emergency Mobile Number:</strong>
                    <div>{{ $item->extra_data['emergency_phone'] ?? '-' }}</div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center"> <a href="{{route('index')}}" class="btn btn-primary mt-2 create_category_button_font back-btn">Back</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
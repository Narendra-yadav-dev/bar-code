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
        background-color: #ffffff !important;
        border-bottom: 1px solid #eee;
    }

    .page-header {
        justify-content: center;
        margin-bottom: 20px;
    }

    .page-title {
        font-weight: 600;
    }

    .register-card {
        max-width: 650px;
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

    .header_bg_color {
        background-color: rgb(223 227 220 / 79%) !important;
    }

    .contact-icon {
        width: 40px;
        height: 40px;
        background-color: rgb(177 179 175 / 86%) !important;
    }

    /* Category colors */
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

    .form-label {
        font-weight: 500;
    }

    .btn-primary {
        padding: 10px 25px;
        border-radius: 30px;
    }

    .btn-group-custom {
        display: flex;
        gap: 10px;
        margin-top: 20px;
        text-align: center;
        justify-content: center;
    }

    .content-wrapper {
        padding-top: 20px;
    }
    .register-btn{
        background-color: #31785882;
        border: none;
        height: 50px;
    }
    .register-btn:hover{
        background-color: #31785882;
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
                Register {{ $qr->categories->name }}
            </h4>
            <p class="text-muted small">
                Fill the details below to complete registration
            </p>
        </div>

        <div class="card register-card">
            <div class="card-body">
                <form method="POST"
                    action="{{ route('scan.store', $qr->rock_id) }}" enctype="multipart/form-data">
                    @csrf
                    @if($qr->categories->slug == 'luggage')
                    <div class="mb-3">
                        <label class="form-label">Luggage Type</label>
                        <input type="text" name="luggage_type" class="form-control">
                    </div>
                    @else
                    <div class="mb-3">
                        @if($qr->categories->slug == 'dogs')
                        <label class="form-label">Dog Name</label>
                        @else
                        <label class="form-label">Product Name</label>
                        @endif
                        <input type="text" name="name" class="form-control">
                    </div>
                    @endif
                    <div class="mb-3">
                        <label class="form-label">Owner Name</label>
                        <input type="text" name="owner_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        @if($qr->categories->slug == 'dogs')
                        <label class="form-label">Dog Image</label>
                        @elseif($qr->categories->slug == 'luggage')
                        <label class="form-label">Luggage Image</label>
                        @else
                        <label class="form-label">Product Image</label>
                        @endif
                        <input type="file" name="image" class="form-control">
                    </div>
                    @if($qr->categories->slug == 'car' || $qr->categories->slug == 'bike')
                    <div class="mb-3">
                        <label class="form-label">Vehical Number</label>
                        <input type="text" name="vehical_number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Model</label>
                        <input type="text" name="product_model" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Color</label>
                        <input type="text" name="product_color" class="form-control">
                    </div>
                    @endif
                    @if($qr->categories->slug == 'dogs')
                    <div class="mb-3">
                        <label class="form-label">Breed</label>
                        <input type="text" name="breed" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Color</label>
                        <input type="text" name="color" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <select name="gender" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    @endif
                    @if($qr->categories->slug == 'luggage')
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    @endif
                    <div class="mb-3">
                        <label class="form-label">Mobile Number</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alternate Mobile Number</label>
                        <input type="text" name="alternate_phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Emergency Mobile Number</label>
                        <input type="text" name="emergency_phone" class="form-control">
                    </div>
                    <div class="btn-group-custom">
                        <button type="submit" class="btn btn-primary w-100 register-btn">
                            Register
                        </button>
                        <a href="{{route('reader')}}" class="btn btn-primary w-100 back-btn">
                            Back
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
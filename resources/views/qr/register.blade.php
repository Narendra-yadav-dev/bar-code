@extends('layouts.app')

@section('title', $qr->categories->name)

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-qrcode"></i>
            </span>
            Register {{$qr->categories->name}}
        </h3>
    </div>

    <div class="card">
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
                <button type="submit" class="btn btn-primary">
                    Register
                </button>

                <a href="{{route('qr-code.reader')}}" class="btn btn-primary create_category_button_font">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
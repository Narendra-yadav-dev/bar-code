@extends('layouts.app')

@section('title', $qr->categories->name)

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-qrcode"></i>
            </span>
            {{ $qr->categories->name }} Registered
        </h3>
    </div>

    <div class="card">
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
                <div class="col-md-12 text-center"> <a href="{{route('qr-code.reader')}}" class="btn btn-primary mt-2 create_category_button_font">Back</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
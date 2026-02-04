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
            <h4 class="card-title">
                {{ isset($qr_code) ? 'Edit QR Code' : 'Create QR Code' }}
            </h4>

            <form method="POST"
                action="{{ isset($qr_code)
                            ? route('qr-code.update', $qr_code->id)
                            : route('qr-code.generate') }}">

                @csrf
                @isset($qr_code)
                @method('PUT')
                @endisset

                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select name="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @if(isset($qr_code->category_id)) {{ $qr_code->category_id === $category->id ? 'selected' : '' }} @endif >{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('product_name')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">
                    {{ isset($qr_code) ? 'Update QR Code' : 'Generate QR Code' }}
                </button>

            </form>
        </div>
    </div>
</div>
@endsection
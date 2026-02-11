@extends('layouts.app')

@section('title', 'Admin Change Password')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-qrcode"></i>
            </span>
            Change Password
        </h3>
    </div>

    <div class="card">
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h4 class="card-title">
                Change Password
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('change-password-post') }}">
                        @csrf

                        <!-- Old Password -->
                        <div class="mb-3">
                            <label class="form-label">Old Password</label>
                            <input type="password" name="old_password" class="form-control">
                            @error('old_password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- New Password -->
                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <input type="password" name="new_password" class="form-control">
                            @error('new_password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control">
                            @error('confirm_password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Update Password
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
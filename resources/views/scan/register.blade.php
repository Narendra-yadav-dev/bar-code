@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Dashboard
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <h2>Register Your Item</h2>

        <form method="POST" action="{{route('register-item')}}">
            @csrf
            <input type="hidden" name="code" value="{{ $code }}">

            <select name="category" required>
                <option value="vehicle">Vehicle</option>
                <option value="luggage">Luggage</option>
                <option value="school_bag">School Bag</option>
                <option value="dog">Dog</option>
            </select>

            <input type="text" name="owner_name" placeholder="Your Name" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <input type="text" name="city" placeholder="City">

            <button type="submit">Register</button>
        </form>

    </div>
</div>
@endsection
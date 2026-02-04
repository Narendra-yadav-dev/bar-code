@extends('layouts.app')

@section('title', isset($category) ? 'Edit Category' : 'Create Category')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-account-group"></i>
            </span> Categories
        </h3>

    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                {{ isset($category) ? 'Edit Category' : 'Create Category' }}
            </h4>
            <form method="POST"
                action="{{ isset($category)
                            ? route('categories.update', $category->id)
                            : route('categories.store') }}">

                @csrf
                @isset($category)
                @method('PUT')
                @endisset

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name"
                        value="{{ old('name', $category->name ?? '') }}"
                        class="form-control">
                    @error('name')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">
                    {{ isset($category) ? 'Update Category' : 'Create Category' }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
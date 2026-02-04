@extends('layouts.app')

@section('title', isset($item) ? 'Edit User' : 'Create Item')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-account-group"></i>
                </span> Items
            </h3>
             
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    {{ isset($item) ? 'Edit Item' : 'Create Item' }}
                </h4>
                <form method="POST"
                    action="{{ isset($item)
                            ? route('items.update', $item->id)
                            : route('items.store') }}">

                    @csrf
                    @isset($item)
                        @method('PUT')
                    @endisset

                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name"
                            value="{{ old('name', $item->name ?? '') }}"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="active"
                                {{ old('status', $item->status ?? '') === 'active' ? 'selected' : '' }}>
                                Active
                            </option>
                            <option value="inactive"
                                {{ old('status', $item->status ?? '') === 'inactive' ? 'selected' : '' }}>
                                Inactive
                            </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control">{{ old('description', $item->description ?? '') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        {{ isset($item) ? 'Update Item' : 'Create Item' }}
                    </button>
                      
                </form>
            </div>
        </div>
    </div>
@endsection

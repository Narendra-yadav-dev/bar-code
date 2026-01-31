@extends('layouts.app')

@section('title', isset($user) ? 'Edit User' : 'Create User')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-account-group"></i>
                </span> Users
            </h3>
             
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    {{ isset($user) ? 'Edit User' : 'Create User' }}
                </h4>

                <form method="POST"
                    action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}">
                    @csrf
                    @if(isset($user))
                        @method('PUT')
                    @endif

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name', $user->name ?? '') }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email', $user->email ?? '') }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control"
                                value="{{ old('phone', $user->phone ?? '') }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="active"
                                    {{ old('status', $user->status ?? '') == 'active' ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="inactive"
                                    {{ old('status', $user->status ?? '') == 'inactive' ? 'selected' : '' }}>
                                    Inactive
                                </option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Role</label>
                            <select name="role" required class="form-control">
                                <option value="">-- Select Role --</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->name }}"
                                            {{ old('role',
                                                $user?->getRoleNames()->first()) === $role->name
                                                ? 'selected' : '' }}>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                            </select>
                        </div>
                        @if($mode === 'create')
                            <div class="col-md-6 mb-3">
                                <label>Password {{ isset($user) ? '(optional)' : '' }}</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                        @endif
                    </div>

                    <button class="btn btn-primary">
                        {{ isset($user) ? 'Update' : 'Create' }}
                    </button>
                    <a href="{{ route('users.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

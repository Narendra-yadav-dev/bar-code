@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div class="content-wrapper">
            
            <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                </span> Items
            </h3>
             
            </div>
             
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                        <div class="card-body">
                            <form method="GET" action="{{ route('items.index') }}" class="mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input 
                                            type="text" 
                                            name="search" 
                                            class="form-control" 
                                            placeholder="Search name ..."
                                            value="{{ request('search') }}"
                                        >
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-primary">Search</button>
                                        <a href="{{ url('items.create') }}" class="btn btn-light">Reset</a>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ route('items.create') }}" class="btn btn-light">Add Item</a>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ route('items.createPrice') }}" class="btn btn-light">Add Price</a>
                                    </div>
                                </div>
                            </form> 
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th> Name </th>
                                        <th> Status </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($items as $user)
                                            <tr>
                                                <td>
                                                    <!-- <img src="{{ asset('public/images/faces/face1.jpg') }}" class="me-2" alt="image">  -->
                                                    {{ $user->name }}
                                                </td>
                                                <td>
                                                    <label class="badge badge-gradient-success">{{ ucfirst($user->status) }}</label>
                                                </td>
                                                
                                                <td>
                                                    <a href="{{ route('items.edit', $user->id) }}" class="btn btn-sm btn-primary">
                                                        Edit
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach  
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    {{ $items->links() }}
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
    </div>
@endsection

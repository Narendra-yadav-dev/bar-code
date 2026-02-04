@extends('layouts.app')

@section('title', 'Categories')

@section('content')
<div class="content-wrapper">

    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </span> Categories
        </h3>

    </div>

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form method="GET" action="{{ route('categories.index') }}" class="mb-3">
                        <div class="row justify-content-end">
                            <div class="col-md-2">
                                <a href="{{ route('categories.create') }}" class="btn btn-light">Add Item</a>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Slug </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>
                                        <!-- <img src="{{ asset('public/images/faces/face1.jpg') }}" class="me-2" alt="image">  -->
                                        {{ $category->name }}
                                    </td>
                                    <td>
                                        {{ $category->slug }}
                                    </td>

                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-3">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
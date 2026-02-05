@extends('layouts.app')

@section('title', 'QR Code')

@section('content')
<div class="content-wrapper">

    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </span> QR Code
        </h3>

    </div>

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form method="GET" action="{{ route('qr-code.index') }}" class="mb-3">
                        <div class="row">
                            <div class="col-md-4 mobile_none">
                                <input
                                    type="text"
                                    name="search"
                                    class="form-control"
                                    placeholder="Search name ..."
                                    value="{{ request('search') }}">
                            </div>
                            <div class="col-md-4 mobile_none">
                                <button class="btn btn-primary">Search</button>
                                <a href="{{ url('qr-code.create') }}" class="btn btn-light">Reset</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('qr-code.create') }}" class="btn btn-light">Add Item</a>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <form method="POST" action="{{ route('qr-code.print') }}" target="_blank">
                            @csrf
                            <button class="btn btn-primary">Print Selected</button>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" id="selectAll">
                                        </th>
                                        <th> ID </th>
                                        <th> Rock ID </th>
                                        <th> Category </th>
                                        <th> QR Image </th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($qr_codes as $qr)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="qr_ids[]" value="{{ $qr->id }}">
                                        </td>
                                        <td> {{ $i }} </td>
                                        <td> {{ $qr->rock_id }} </td>
                                        <td> {{ $qr->categories->name ?? '-' }} </td>
                                        <td>
                                            {!! QrCode::size(50)->generate(url('/scan/'.$qr->rock_id)) !!}
                                        </td>
                                        <!-- <td>
                                            <a href="{{ route('qr-code.edit', $qr->id) }}" class="btn btn-sm btn-primary">
                                                Edit
                                            </a>
                                        </td> -->
                                    </tr>
                                    @php $i++; @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.getElementById('selectAll').addEventListener('click', function () {
    document.querySelectorAll('input[name="qr_ids[]"]').forEach(cb => {
        cb.checked = this.checked;
    });
});
</script>
@endsection
@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Travel Packages  {{ $item->title }}</h1>
    </div>

    {{-- jika ada permasalahan / error maka fungsi dipanggil --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('transaction.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                    <div class="form-group">
                        <label for="transaction_status">Status</label>
                        <select name="transaction_status" class="form-control" required>
                            <option value="{{ $item->transaction_status }}">Dont't Change ({{ $item->transaction_status }})</option>
                            <option value="IN_CART">In Cart</option>
                            <option value="PENDING">Pending</option>
                            <option value="SUCCESS">Success</option>
                            <option value="CANCEL">Cancel</option>
                            <option value="FAILED">Failed</option>
                        </select>
                    </div>
                <button class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

@endsection

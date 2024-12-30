@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Delete Voucher</h1>

    <div class="alert alert-danger">
        <p>Are you sure you want to delete the voucher <strong>{{ $voucher->code }}</strong>?</p>
        <p>Discount: <strong>{{ $voucher->discount }}%</strong></p>
        <p>Expiry Date: {{ $voucher->valid_to }}</p>
    </div>

    <form action="{{ route('vouchers.destroy', $voucher->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
            <a href="{{ route('vouchers.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection

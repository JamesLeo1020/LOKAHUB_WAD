@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Voucher Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Voucher Code: {{ $voucher->code }}</h5>
            <p class="card-text">Discount: {{ $voucher->discount }}%</p>
            <p class="card-text">Expiry Date: {{ $voucher->valid_to }}</p>
        </div>
    </div>

    <a href="{{ route('vouchers.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection

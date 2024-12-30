@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Voucher</h1>
    <form action="{{ route('vouchers.update', $voucher->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="code" class="form-label">Voucher Code</label>
            <input type="text" name="code" id="code" class="form-control" value="{{ $voucher->code }}" required>
        </div>
        <div class="mb-3">
            <label for="discount" class="form-label">Discount (%)</label>
            <input type="number" name="discount" id="discount" class="form-control" value="{{ $voucher->discount }}" min="1" max="100" required>
        </div>
        <div class="mb-3">
            <label for="expiry_date" class="form-label">Expiry Date</label>
            <input type="date" name="expiry_date" id="expiry_date" class="form-control" value="{{ $voucher->expiry_date }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('vouchers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

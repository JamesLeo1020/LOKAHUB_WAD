@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Create New Voucher</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('vouchers.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="code" class="form-label">Voucher Code</label>
                            <input type="text" name="code" id="code" class="form-control" value="{{ old('code') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="discount" class="form-label">Discount (%)</label>
                            <input type="number" name="discount" id="discount" class="form-control" value="{{ old('discount') }}" min="0" required>
                        </div>

                        <div class="mb-3">
                            <label for="valid_from" class="form-label">Valid From</label>
                            <input type="date" name="valid_from" id="valid_from" class="form-control" value="{{ old('valid_from') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="valid_to" class="form-label">Valid To</label>
                            <input type="date" name="valid_to" id="valid_to" class="form-control" value="{{ old('valid_to') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="usage_limit" class="form-label">Usage Limit</label>
                            <input type="number" name="usage_limit" id="usage_limit" class="form-control" value="{{ old('usage_limit') }}">
                            <small class="text-muted">Leave blank for unlimited usage.</small>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('vouchers.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

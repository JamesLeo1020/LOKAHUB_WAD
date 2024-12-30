@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Vouchers</h1>
    <a href="{{ route('vouchers.create') }}" class="btn btn-primary mb-3">Add Voucher</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($vouchers->isEmpty())
        <div class="alert alert-info">
            No vouchers found. Add one now!
        </div>
    @else
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Voucher Code</th>
                    <th>Discount (%)</th>
                    <th>Expiry Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vouchers as $voucher)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $voucher->code }}</td>
                        <td>{{ $voucher->discount }}</td>
                        <td>{{ $voucher->valid_to }}</td>
                        <td>
                            <a href="{{ route('vouchers.show', $voucher->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('vouchers.edit', $voucher->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('vouchers.destroy', $voucher->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this voucher?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

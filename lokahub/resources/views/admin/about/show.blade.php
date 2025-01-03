@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail About Us</h1>
        <p><strong>Judul:</strong> {{ $about->title }}</p>
        <p><strong>Deskripsi:</strong> {{ $about->description }}</p>
        <a href="{{ route('admin.about.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection

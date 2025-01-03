@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail About Us</h1>
        <p><strong>Judul:</strong> {{ $about->title }}</p>
        <p><strong>Deskripsi:</strong> {{ $about->description }}</p>
        @if ($about->image)
            <p><strong>Gambar:</strong></p>
            <img src="{{ Storage::url($about->image) }}" width="200" alt="Image">
        @endif
        <a href="{{ route('admin.about.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection

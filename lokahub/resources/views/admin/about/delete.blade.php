@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Apakah Anda yakin ingin menghapus About Us ini?</h1>
        <p><strong>Judul:</strong> {{ $about->title }}</p>
        <p><strong>Deskripsi:</strong> {{ $about->description }}</p>
        <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
            <a href="{{ route('admin.about.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection

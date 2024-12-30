@extends('layouts.admin')

@section('content')
<h1>Hapus About</h1>
<p>Apakah Anda yakin ingin menghapus informasi berikut?</p>
<div>
    <h2>{{ $about->title }}</h2>
    <p>{{ $about->description }}</p>
    @if ($about->image)
        <img src="{{ asset('storage/' . $about->image) }}" alt="Gambar" width="200">
    @endif
</div>
<form action="{{ route('admin.about.destroy', $about->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
    <a href="{{ route('admin.about.index') }}">Batal</a>
</form>
@endsection

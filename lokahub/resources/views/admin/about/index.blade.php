@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>About Us</h1>
        <a href="{{ route('admin.about.create') }}" class="btn btn-primary">Tambah About Us</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about)
                    <tr>
                        <td>{{ $about->title }}</td>
                        <td>{{ Str::limit($about->description, 50) }}</td>
                        <td>
                            <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

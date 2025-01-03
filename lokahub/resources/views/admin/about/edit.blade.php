@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white p-6">
    <div class="max-w-2xl mx-auto">
        <nav class="mb-8">
            <a href="{{ route('admin.about.index') }}" class="text-gray-600 hover:text-gray-900">← Back</a>
        </nav>

        @if (session('success'))
            <div class="mb-6 px-4 py-3 bg-green-50 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="space-y-6">
                <div>
                    <label for="title" class="block text-sm text-gray-900">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $about->title) }}" 
                           class="mt-1 w-full px-3 py-2 border border-gray-200 rounded-lg focus:border-gray-400 focus:ring-0">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="subtitle" class="block text-sm text-gray-900">Subtitle</label>
                    <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', $about->subtitle) }}" 
                           class="mt-1 w-full px-3 py-2 border border-gray-200 rounded-lg focus:border-gray-400 focus:ring-0">
                </div>

                <div>
                    <label for="description" class="block text-sm text-gray-900">Description</label>
                    <textarea name="description" id="description" rows="4"
                              class="mt-1 w-full px-3 py-2 border border-gray-200 rounded-lg focus:border-gray-400 focus:ring-0">{{ old('description', $about->description) }}</textarea>
                </div>

                <div>
                    <label for="mission" class="block text-sm text-gray-900">Mission</label>
                    <textarea name="mission" id="mission" rows="3"
                              class="mt-1 w-full px-3 py-2 border border-gray-200 rounded-lg focus:border-gray-400 focus:ring-0">{{ old('mission', $about->mission) }}</textarea>
                </div>

                <div>
                    <label for="vision" class="block text-sm text-gray-900">Vision</label>
                    <textarea name="vision" id="vision" rows="3"
                              class="mt-1 w-full px-3 py-2 border border-gray-200 rounded-lg focus:border-gray-400 focus:ring-0">{{ old('vision', $about->vision) }}</textarea>
                </div>

                <div>
                    <label class="block text-sm text-gray-900">Image</label>
                    <div class="mt-1 flex items-center gap-4">
                        <input type="file" name="image" id="image" accept="image/*"
                               class="text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:bg-gray-100 hover:file:bg-gray-200">
                        @if($about->image)
                            <img src="{{ asset('images/' . $about->image) }}" alt="Current" class="h-12 w-12 object-cover rounded">
                        @endif
                    </div>
                </div>
            </div>

            <div class="flex justify-end gap-3 pt-6 mt-6 border-t">
                <a href="{{ route('admin.about.index') }}" class="px-4 py-2 text-sm text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">
                    Cancel
                </a>
                <button type="submit" class="px-4 py-2 text-sm text-white bg-gray-900 rounded-lg hover:bg-gray-800">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script src="https://cdn.tiny.cloud/1/YOUR-API-KEY/tinymce/6/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        menubar: false,
        toolbar: 'bold italic | bullist numlist | link',
        plugins: 'link lists',
        height: 200
    });
</script>
@endpush
@endsection
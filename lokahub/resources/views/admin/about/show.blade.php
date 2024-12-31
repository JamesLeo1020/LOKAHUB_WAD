@extends('layouts.app')

@section('content')
<div class="container">
    <h1>About Us Detail</h1>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- About Content -->
    <div class="mb-5">
        <p class="fs-5 text-muted">{{ $about->content }}</p>
    </div>

    <!-- Back to About List -->
    <a href="{{ route('about.index') }}" class="btn btn-secondary mb-4">Back to About List</a>

    <!-- Static Carousel for Related About Entries -->
    @if ($relatedAbouts->count() > 0)
        <div id="aboutCarousel" class="carousel slide" data-bs-ride="false">
            <h3 class="mb-4">Explore More About Us</h3>
            <div class="carousel-inner">
                @foreach ($relatedAbouts as $index => $relatedAbout)
                    @if ($index % 8 === 0) <!-- Start a new carousel item every 8 entries -->
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="d-flex justify-content-around">
                    @endif
                                <div class="related-about-item text-center mx-2">
                                    <h5>{{ $relatedAbout->title }}</h5>
                                    <p>{{ \Illuminate\Support\Str::limit($relatedAbout->description, 100, '...') }}</p>
                                    <a href="{{ route('about.show', $relatedAbout->id) }}" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                    @if (($index + 1) % 8 === 0 || $index === $relatedAbouts->count() - 1) <!-- Close the carousel item -->
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    @endif
</div>
@endsection

@extends('main.layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>
                    Category: <a href="/search?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                </p>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif
                <article class="my-3 fs-5">
                    <p>{!! $post->body !!}</p>
                </article>

                <a href="/blog" class="d-block mt-3">Back to About</a>
            </div>
        </div>
    </div>
@endsection

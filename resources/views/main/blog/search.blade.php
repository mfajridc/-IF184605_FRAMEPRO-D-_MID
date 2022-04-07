@extends('main.layouts.main')

@section('content')
    @if ($posts->count())
        <div class="album">
            <div class="container mt-4">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($posts as $post)
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                                    <a href="/search?category={{ $post->category->slug }}"
                                        class="text-white text-decoration-none">
                                        {{ $post->category->name }}
                                    </a>
                                </div>
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                        class="img-fluid">
                                @else
                                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                        class="card-img-top" alt="{{ $post->category->name }}">
                                @endif
                                {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">Thumbnail</text>
                            </svg> --}}

                                <div class="card-body">
                                    <h1>{{ $post->title }}</h1>
                                    <p>{{ $post->excerpt }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                                <a class="text-decoration-none" href="/blog/{{ $post->slug }}">Read
                                                    more</a>
                                            </button>
                                        </div>
                                        <small class="text-muted">Last updated
                                            {{ $post->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p class="text-center fs-4 my-5">No post found.</p>
    @endif

    <div class="container mt-4">
        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
    </div>

@endsection

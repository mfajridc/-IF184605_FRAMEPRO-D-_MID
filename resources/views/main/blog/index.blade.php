@extends('main.layouts.main')

@section('content')
    @if ($posts->count())
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    @if ($posts[0]->image)
                        <div>
                            <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                                class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                            class="card-img-top" alt="{{ $posts[0]->category->name }}">
                    @endif

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>{{ $posts[0]->title }}</h1>
                            <p>{{ $posts[0]->excerpt }}</p>
                            <p><a class="btn btn-lg btn-primary" href="/blog/{{ $posts[0]->slug }}">Read more</a></p>
                            <small>Last updated {{ $posts[0]->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    @if ($posts[1]->image)
                        <div>
                            <img src="{{ asset('storage/' . $posts[1]->image) }}" alt="{{ $posts[1]->category->name }}"
                                class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $posts[1]->category->name }}"
                            class="card-img-top" alt="{{ $posts[1]->category->name }}">
                    @endif

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>{{ $posts[1]->title }}</h1>
                            <p>{{ $posts[1]->excerpt }}</p>
                            <p><a class="btn btn-lg btn-primary" href="/blog/{{ $posts[1]->slug }}">Read more</a></p>
                            <small>Last updated {{ $posts[1]->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    @if ($posts[2]->image)
                        <div>
                            <img src="{{ asset('storage/' . $posts[2]->image) }}"
                                alt="{{ $posts[2]->category->name }}" class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $posts[2]->category->name }}"
                            class="card-img-top" alt="{{ $posts[2]->category->name }}">
                    @endif

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>{{ $posts[2]->title }}</h1>
                            <p>{{ $posts[2]->excerpt }}</p>
                            <p><a class="btn btn-lg btn-primary" href="/blog/{{ $posts[2]->slug }}">Read more</a></p>
                            <small>Last updated {{ $posts[2]->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="album">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($posts->skip(3) as $post)
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                                    <a href="/search?category={{ $post->category->slug }}"
                                        class="text-white text-decoration-none">
                                        {{ $post->category->name }}
                                    </a>
                                </div>
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}"
                                        alt="{{ $post->category->name }}" class="img-fluid">
                                @else
                                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                        class="card-img-top" alt="{{ $post->category->name }}">
                                @endif

                                <div class="card-body">
                                    <h1>{{ $post->title }}</h1>
                                    <p>{{ $post->excerpt }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                                <a class="text-decoration-none" href="/blog/{{ $post->slug }}">Read more</a>
                                            </button>
                                        </div>
                                        <small class="text-muted">Last updated {{ $post->created_at->diffForHumans() }}</small>
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

    {{-- <div class="container mt-4">
        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
    </div> --}}

@endsection

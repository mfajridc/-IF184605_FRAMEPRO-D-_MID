@extends('main.layouts.main')

@section('content')
    <div class="container col-xxl-8 px-4">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @error('name')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
            @error('username')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
            @error('email')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
            @error('password')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="https://img.jakpost.net/c/2016/05/04/2016_05_04_4149_1462354829._large.jpg"
                    class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Bag & Shoe Care</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum ante et
                    ornare pulvinar. Phasellus quis arcu quis ligula dignissim feugiat. Suspendisse potenti. Pellentesque
                    vel purus id ipsum dignissim finibus et sit amet metus. Quisque viverra lectus tincidunt ultrices
                    placerat. Suspendisse pharetra auctor dui nec blandit. Maecenas vitae congue nulla. Fusce mattis
                    vehicula vulputate. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent luctus elit
                    turpis. Cras hendrerit nibh neque, id molestie sem porta a. Ut egestas semper erat.</p>
                {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div> --}}
            </div>
        </div>
    </div>
@endsection

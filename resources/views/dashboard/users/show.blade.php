@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $user->username }}</h1>
                <a href="/dashboard/users" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all users</a>
                <a href="/dashboard/users/{{ $user->username }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                <form action="/dashboard/users/{{ $user->username }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                            data-feather="x-circle"></span> Delete</button>
                </form>

                <article class="my-3 fs-5">
                    <p>Name: {{ $user->name }}</p>
                    <p>Username: {{ $user->username }}</p>
                    <p>Email: {{ $user->email }}</p>
                    <p>Password: {{ $user->password }}</p>
                    <p>Created at: {{ $user->created_at }}</p>
                    <p>Updated at: {{ $user->updated_at }}</p>
                </article>

            </div>
        </div>
    </div>
@endsection

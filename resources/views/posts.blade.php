@extends('layouts.main')
{{-- @dd($posts[0]->author); --}}
@section('container')
    <div class="container mt-5">
        <h1 class="mb-3 text-center">{{ $title }}</h1>

        <div class="row justify-content-center mb-5">
            <div class="col-md-6">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @elseif (request('author'))
                        <input type="hidden" name="category" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Search..."
                            value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        @if ($posts->count() > 0)
            <div class="card mb-5">
                @if ($posts[0]->image)
                    <div style="max-height: 400px; overflow:hidden">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="" class="img-fluid"
                            width="500">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1000x400?{{ $posts[0]->category->name }}" class="card-img-top"
                        alt="{{ $posts[0]->category->name }}">
                @endif
                <div class="card-body">
                    <p class="card-text">
                        <small class="text-muted">Last {{ $posts[0]->created_at->diffForHumans() }}</small>
                        <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">
                            <small class="text-muted"> by {{ $posts[0]->author->name }}</small>
                        </a>
                        <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                            <small class="text-muted "> in {{ $posts[0]->category->name }}</small>
                        </a>
                    </p>
                    <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                        <h5 class="card-title">{{ $posts[0]->title }}</h5>
                    </a>
                    <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"">
                        <p class="card-text">{{ $posts[0]->slug }}</p>
                    </a>
                </div>
            </div>

            {{-- Loop Posts --}}
            <div class="container">
                <div class="row ">
                    @foreach ($posts->skip(1) as $post)
                        <div class="col-md-4 col-sm-6">
                            <div class="card mb-3">
                                <a href="/posts?category={{ $post->category->slug }}"
                                    class="position-absolute bg-dark text-light p-2 text-decoration-none">{{ $post->category->name }}</a>
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid"
                                        style="max-height: 300px;">
                                @else
                                    <img src="https://source.unsplash.com/1000x500?{{ $post->category->name }}"
                                        class="card-img-top" alt{{ $post->category->name }}">
                                @endif

                                <div class="card-body">
                                    <p class="card-text">
                                        <small class="text-muted">Last {{ $post->created_at->diffForHumans() }}</small>
                                        By
                                        <a href="/posts?author={{ $post->author->username }}">
                                            <small class="text-muted"> {{ $post->author->name }}</small>
                                        </a>
                                    </p>
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->slug }}</p>
                                    <a href="post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- Ends Loop Posts --}}
        @else
            <p>Post Not Found</p>
        @endif

        {{ $posts->links() }}

    </div>
@endsection

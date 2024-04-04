@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <article class="mb-5">
                    <h2 class="mb-3">{{ $post->title }}</h2>
                    <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span> Back To All My
                        Post</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <span
                            data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger border-0" onclick="return confirm('Are you Sure?')">
                            <span data-feather="x-circle"></span> Delete
                        </button>
                    </form>
                    @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid mt-5"
                                width="500">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/800x300?{{ $post->category->name }}" alt=""
                            class="img-fluid mt-5">
                    @endif
                    <p class="fs-3 text">{!! $post->content !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection

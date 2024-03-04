@extends('dashboard.layouts.main')
    
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <article class="mb-5">
                    <h2 class="mb-3">{{ $post->title }}</h2>
                    <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span> Back To All My Post</a>
                    <a href="" class="btn btn-warning"> <span data-feather="edit"></span> Edit</a>
                    <a href="" class="btn btn-danger"> <span data-feather="x-circle"></span> Delete</a>
                    <img src="https://source.unsplash.com/800x300?{{ $post->category->name }}" alt="" class="img-fluid mt-5">
                    <p class="fs-3 text">{!! $post->content !!}</p>
                </article>
            </div>
        </div>
    </div>

    
@endsection
      

   
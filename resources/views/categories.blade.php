@extends('layouts.main')
@section('container')
<div class="container mt-5">
    <h1>{{ $title }}</h1>

   
    <div class="container mt-5
    ">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/categories/{{ $category->slug}}"> 
                    <div class="card text-bg-dark">
                        <img src="https://source.unsplash.com/1000x500?{{ $category->name }}." class="card-img" alt="...">
                        <div class="card-img-overlay ">
                            <h5 class="card-title text-light btn btn-dark text-decoration-none">
                                    {{ $category->name }}
                            </h5>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
       

   
</div>
@endsection
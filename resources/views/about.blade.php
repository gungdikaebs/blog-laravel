@extends('layouts.main')


@section('container')
<div class="container">
    <h1>Halaman About</h1>
    <h3>Nama : {{ $name }}</h3>
    <p>Email : {{ $email }}</p>
    <img src="{{ $image }}" alt="" width="300px">
</div>
@endsection
 

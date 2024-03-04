@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Sign Up Form</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating ">
                        <input type="text" name="name" class="form-control rounded-top 
                        @error('name')
                            is-invalid
                        @enderror" id="name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control
                        @error('username')
                            is-invalid
                        @enderror" id="username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control
                        @error('email')
                            is-invalid
                        @enderror" id="email" required value="{{ old('email') }}">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating rounded-bottom mb-3">
                        <input type="password" name="password" class="form-control rounded-bottom 
                        @error('password')
                            is-invalid
                        @enderror" id="password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
                </form>
                <small class="d-block text-center mt-3">
                    Already Registered? <a href="/login">Sign in</a>
                </small>
            </main>
        </div>
    </div>
    
</div>
@endsection
@extends('layouts.Registration')
@section('title', 'Signup')

@section('content')


    <div class="container">
        <div class="mt-5">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if (session()->has('Success'))
                <div class="alert alert-Success">{{ session('Success') }}</div>
            @endif
            <form action="{{ route('Signup.post') }}" method="POST" class="ms-auto me-auto mt-3 display-6"
                style="width: 500px">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control display-6" id="exampleInputEmail1"
                        aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname" class="form-label">Userneme</label>
                    <input type="text" name="name" class="form-control display-6" id="exampleInputname"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control display-6" id="exampleInputPassword1" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input display-6" id="exampleCheck1">
                    <label class="form-check-label " for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    @endsection

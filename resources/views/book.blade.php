@extends('layouts.app')
@section('title', 'book')

@section('content')
    <!-- header section ends -->

    <div class="heading" style="background:url({{ asset('assets/images/header-bg-3.png') }}) no-repeat">
        <h1>book now</h1>
    </div>

    <!-- booking section starts  -->

    <section class="booking">

        <h1 class="heading-title">book your trip!</h1>
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

        <form action="{{ route('book.store') }}" method="post" class="book-form">
            @csrf
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name" value="{{ old('name') }}">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email" value="{{ old('email') }}">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone" value="{{ old('phone') }}">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address" value="{{ old('address') }}">
                </div>
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location"
                        value="{{ old('location') }}">
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests" value="{{ old('guests') }}">
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>

    </section>

    <!-- booking section ends -->















@endsection

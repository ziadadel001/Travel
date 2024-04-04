@extends('layouts.app')
@section('title', 'package')

@section('content')
    <div class="heading" style="background:url({{ asset('assets/images/header-bg-2.png') }}) no-repeat">
        <h1>packages</h1>
    </div>

    <!-- packages section starts  -->

    <section class="packages">

        <h1 class="heading-title">top destinations</h1>

        <div class="box-container">
            @foreach ($packages->all() as $package)
                <div class="box">
                    <div class="image">
                        <img src="{{ asset('assets/images/img-1.jpg') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>{{ $package->title }}</h3>
                        <p>{{ $package->content }}</p>
                        <a href="book.html" class="btn">book now</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="load-more"><span class="btn">load more</span></div>

    </section>

    <!-- packages section ends -->











@endsection

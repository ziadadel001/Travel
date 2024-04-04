@extends('layouts.app')
@section('title', 'about')

@section('content')
    <div class="heading" style="background:url({{ asset('assets/images/header-bg-1.png') }}) no-repeat">
        <h1>about us</h1>
    </div>

    <!-- about section starts  -->

    <section class="about">

        <div class="image">
            <img src="{{ asset('assets/images/about-img.jpg') }}" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure numquam nulla iusto corporis dolor commodi
                libero, vitae obcaecati optio rerum ab culpa nesciunt, earum mollitia quasi ipsam non. Aliquid, iure.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid rerum, delectus voluptate aliquam quaerat
                iusto repellendus error nulla ab atque.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
            </div>
        </div>

    </section>

    <!-- about section ends -->

    <!-- reviews section starts  -->

    <section class="reviews">

        <h1 class="heading-title"> clients reviews </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">
                @foreach ($feedbacks->all() as $feedback)
                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>{{ $feedback->content }}</p>
                        <h3>{{ $feedback->name }}</h3>
                        <span>{{ $feedback->job_title }}</span>
                        <img src="{{ asset('assets/images/pic-1.png') }}" alt="">
                    </div>
                @endforeach
            </div>

        </div>

    </section>
@endsection
<!-- reviews section ends -->

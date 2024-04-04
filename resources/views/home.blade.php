@extends('layouts.app')
@section('title', 'home')


@section('content')
    <!-- home section starts  -->
    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide"
                    style="background:url({{ asset('assets/images/home-slide-1.jpg') }}) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>

                    </div>
                </div>

                <div class="swiper-slide slide"
                    style="background:url({{ asset('assets/images/home-slide-2.jpg') }}) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>

                    </div>
                </div>

                <div class="swiper-slide slide"
                    style="background:url({{ asset('assets/images/home-slide-3.jpg') }}) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>

                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- services section starts  -->

    <section class="services">

        <h1 class="heading-title"> our services </h1>

        <div class="box-container">

            <div class="box">
                <img src="{{ asset('assets/images/icon-1.png') }}" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="{{ asset('assets/images/icon-2.png') }}" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="{{ asset('assets/images/icon-3.png') }}" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="{{ asset('assets/images/icon-4.png') }}" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="{{ asset('assets/images/icon-5.png') }}" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="{{ asset('assets/images/icon-6.png') }}" alt="">
                <h3>camping</h3>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- home about section starts  -->

    <section class="home-about">

        <div class="image">
            <img src="{{ asset('assets/images/about-img.jpg') }}" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam
                ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident
                voluptate?</p>
            <a href="#" class="btn">read more</a>
        </div>

    </section>

    <!-- home about section ends -->

    <!-- home packages section starts  -->

    <section class="home-packages">

        <h1 class="heading-title"> our packages </h1>

        <div class="box-container">
            @foreach ($package->all() as $pack)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('assets/images/img-3.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>{{ $pack->title }}</h3>
                            <p>{{ $pack->content }}</p>
                            <a href="book.html" class="btn">book now</a>
                        </div>
                    </div>
            @endforeach
        </div>

        <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

    </section>

    <!-- home packages section ends -->

    <!-- home offer section starts  -->

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt
                maiores quas! Magni cumque quaerat saepe!</p>
            <a href="book.html" class="btn">book now</a>
        </div>
    </section>

    <!-- home offer section ends -->



@endsection









{{-- 
     @auth
         {{ auth()->user()->name }}
     @endauth
 @endsection --}}

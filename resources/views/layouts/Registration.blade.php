<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>

<body>

    <!-- header section starts  -->

    <section class="header">

        <a href="home.html" class="logo">travel</a>

        <nav class="navbar">
            <a href="{{ route('Landing.index') }}">home</a>
            <a href="{{ route('about.index') }}">about</a>
            <a href="{{ route('package.index') }}">package</a>
            <a href="{{ route('book.index') }}">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    @yield('content')

@extends('template.blog')

@section('header')
<header class="position-fixed w-100 transition text-white">
    <div class="d-flex p-4 container">
        <a href="{{ route('blog.index') }}" class="d-flex text-decoration-none">
            <h3 class="my-auto text-white">ScarWash</h3>
        </a>

        <!-- RIGHT MENU -->
        <div class="ms-auto d-lg-flex d-none gap-2">
            <a href="{{ route('location.index')}}" class="btn text-white">
                Location
            </a>
            <a href="{{ route('blog.index') }}" class="btn text-white">
                Blog
            </a>
            <a href="{{ route('pricelist.index') }}" class="btn btn-dark">
                PRICE LIST
            </a>
            <a href="{{ route('login.index') }}" class="btn text-white">
                Login
            </a>
        </div>

        <!-- RIGHT MOBILE MENU ICON -->
        <div class="d-lg-none d-flex ms-auto" onclick="showMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="pointer bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path
                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
            </svg>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="menu" class="hide p-4 position-fixed left-0 top-0 w-100 h-100 bg-black d-flex flex-column">
        <div onclick="showMenu()" class="pointer ms-auto">
            X
        </div>

        <!-- MENU -->
        <a href="/yes-blog/location" class="btn text-white">
            Location
            <hr />
        </a>
        <a href="/yes-blog/blog" class="btn text-white">
            Blog
            <hr />
        </a>
        <div>
            <a href="/yes-blog/price" class="btn btn-light w-100">PRICE LIST</a>
        </div>
    </div>
</header>
@endsection

@section('section')
<section class="app-section-hero">
    <div class="container">
        <div class="row">
            <!-- RIGHT CONTENT -->
            <div class="col-lg-8 col-12 my-auto d-grid gap-4">
                <div class="d-grid gap-4 app-hero-first-content">
                    <h1 class="mt-5">{{$post->title}}</h1>
                    <!-- <p style="font-size: 13px;">Posted by {{$post->user->name}} on {{$post->created_at}}</p> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('blog.index')}}">Blog</a></li>
            <li class="breadcrumb-item">
                @foreach ( $post->categories as $category )
                    {{$category->name}}
                @endforeach
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{$post->title}}
            </li>
        </ol>
    </nav>
<div class="container">
<div class="row">
    <div class="col-lg-4 col-12">
        <img class="app-hero-img"
        src="{{ asset('uploads/' . $post->banner_image) }}">
    </div>
    <div class="col-lg-8 col-12 my-auto d-grid gap-4">
        <div class="d-grid gap-4">
            <div>
                <p>{!!$post->body!!}</p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
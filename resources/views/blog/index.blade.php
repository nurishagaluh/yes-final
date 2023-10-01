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
    <!-- SECTION TYPE 1 : HERO -->
    <section class="app-section-hero">
        <div class="container">
            <div class="row">
                <!-- LEFT IMAGE -->
                <div class="col-lg-4 col-12">
                    <img class="w-100 app-hero-img"
                        src="{{asset('yesblog')}}/lwb.jpg">
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-8 col-12 my-auto d-grid gap-4">
                    <div class="d-grid gap-4 app-hero-first-content">
                        <h1 class="mt-5">ScarWash Blog</h1>
                        <div>
                            ScarWash merupakan penyedia layanan jasa dalam perawatan sepatu, tas dan topi.
                            Kami melakukan perawatan secara profesional, dengan teknik khusus, serta menggunakan alat dan bahan premium. 
                            Dapatkan informasi terbaru mengenai ScarWash dengan menjadi member kami dan daftarkan segera menggunakan email Anda.
                        </div>
                    </div>
                    <div>
                        <b>Kami Telah Hadir di Jawa Timur</b>
                        <div class="row gap-4 mt-4">
                            <div class="col">
                                <b>2 Kota di Jawa Timur</b>
                                <p>Dengan total 7 cabang</p>
                            </div>
                            <div class="col">
                                <b>Surabaya</b>
                                <p>5 cabang di Surabaya</p>
                            </div>
                            <div class="col">
                                <b>Sidoarjo</b>
                                <p>2 cabang di Sidoarjo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 2 -->
    <section class="bg-black text-white py-5">
        <div class="container">
            <div class="d-flex">
                <h1>Promo ScarWash</h1>
            </div>
            <div class="row mt-4 gy-4">
            <div class="row mt-4 gy-4">

                @foreach ($posts as $post)
                <div class="col-lg-3 col-12 rounded-3">
                    @if ($post->banner_image)
                    <div>
                    <img class="w-100 object-cover" src="{{ asset('uploads/' . $post->banner_image) }}" style="height:300px; object-fit:contain;">
                    </div>
                    @endif
                    <div class="p-4 bg-secondary d-grid gap-4" style="height: 180px;">
                        <b style="font-size: 20">{{$post->title}}</b>
                        <!-- <p>Posted by {{$post->user->name}} on {{$post->created_at}}</p> -->
                        <a href="{{ route('blog.show',['slug'=>$post->slug])}}">
                        <a class="btn btn-light" href="{{ route('blog.show',['slug'=>$post->slug])}}">LIHAT PROMO</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 3 -->
    <section class="container py-5">
        <div class="text-center">
            <h1>Layanan Kami</h1>
            <p>Kami memberikan berbagai macam layanan untuk perawatan sepatu, topi dan tas kesayangan anda yang akan dikerjakan oleh tim kami yang profesional dan berpengalaman.</p>
        </div>

        <div class="row g-5">
            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover" height=300px style="border:0;"
                    src="{{asset('yesblog')}}/fc.jpg">
                <div class="py-2 d-grid gap-2">
                    <h2>Fast Cleaning</h2>
                    <p>Membersihkan bagian luar midsole dan upper</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover" height=300px style="border:0;"
                    src="{{asset('yesblog')}}/rp.jpg">
                <div class="py-2 d-grid gap-2">
                    <h2>Reprair or Reglue</h2>
                    <p>Memperbaiki atau mengelem ulang sepatu yang lekang atau yang sudah lepas</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover" height=300px style="border:0;"
                    src="{{asset('yesblog')}}/uy.jpg">
                <div class="py-2 d-grid gap-2">
                    <h2>Unyellowing</h2>
                    <p>Menghilangkan noda kuning pada midsole hingga menjadi putih kembali (tidak bisa untuk sole berbahan boots atau busa)</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover" height=300px style="border:0;"
                    src="{{asset('yesblog')}}/rc.jpg">
                <div class="py-2 d-grid gap-2">
                    <h2>Repaint/Change Color</h2>
                    <p>Mewarnai ulang atau mengubah warna sepatu (sudah termasuk deep cleaning)</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover" height=300px style="border:0;"
                    src="{{asset('yesblog')}}/dc.jpg">
                <div class="py-2 d-grid gap-2">
                    <h2>Deep Cleaning</h2>
                    <p>Mencuci seluruh bagian sepatu. Mulai dari upper, laces, insole, midsole, outsole dll</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover" height=300px style="border:0;"
                    src="{{asset('yesblog')}}/lc.jpg">
                <div class="py-2 d-grid gap-2">
                    <h2>Leather Care</h2>
                    <p>Mencuci seluruh bagian sepatu berbahan kulit dan dipoles leather wax</p>
                </div>
            </div>

        <div class="text-center py-2">
            <a href="{{ route('pricelist.index')}}" class="btn btn-dark">READ MORE</a>
        </div>
    </section>

    <!-- SECTION TYPE 4 : EMBED MAP -->
    <section class="bg-black py-5 text-center">
        <div class="text-white">
            <h1>OUR LOCATION</h1>
        </div>
        <div class="text-center py-2">
            <a href="{{ route('location.index')}}" class="btn btn-dark">Find us at here</a>
        </div>
        <div class="container">
            <div>
                <iframe class="rounded-3 w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.232945720039!2d112.71284229999999!3d-7.327713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc9f986b6fdb%3A0xe7df8bd037983099!2sLaundry%20Sepatu%20Surabaya%20(Scarwash%20Jambangan)!5e0!3m2!1sid!2sid!4v1692435497610!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 5 : GALLERY -->
    <section class="py-5 bg-black text-white">
        <div class="d-flex container">
            <h1>Gallery</h1>
        </div>

        <div class="row gx-4 mt-4">
            <img style="height: 350px;" class="col-2 object-fit-cover"
                src="{{asset('yesblog')}}/ed.png">
            <img style="height:350px;" class="col-2 object-fit-cover"
                src="{{asset('yesblog')}}/ba.png">
            <img style="height:350px;" class="col-2 object-fit-cover"
                src="{{asset('yesblog')}}/na.png">
            <img style="height:350px;" class="col-2 object-fit-cover"
                src="{{asset('yesblog')}}/pr.png">
            <img style="height:350px;" class="col-2 object-fit-cover"
                src="{{asset('yesblog')}}/pl.png">
            <img style="height:350px;" class="col-2 object-fit-cover"
                src="{{asset('yesblog')}}/fd.png">    
        </div>
   </section>

@endsection


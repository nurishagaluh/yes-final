@extends('template.blog')
<body>
    <header class="position-fixed w-100 transition">
        <div class="d-flex p-4 container">
            <a href="{{ route('blog.index') }}" class="d-flex text-decoration-none">
                <h3 class="my-auto text-black">SCARWASH</h3>
            </a>

            <!-- RIGHT MENU -->
            <div class="ms-auto d-lg-flex d-none gap-2">
                <a href="{{ route('location.index')}}" class="btn">
                    Location
                </a>
                <a href="{{ route('blog.index') }}" class="btn">
                    Blog
                </a>
                <a href="{{ route('pricelist.index') }}" class="btn btn-dark">
                    PRICE LIST
                </a>
                <a href="{{ route('login.index') }}" class="btn">
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

    <!-- SECTION SEARCH -->
    <section class="container" style="padding-top:100px;">
        <div class="text-center">
        <h1>Lokasi Store Kami</h1>
        <b>Surabaya dan Sidoarjo</b>

        <div class="d-flex mt-4">
            <input class="app-input flex-grow-1 p-2" placeholder="find us">
        </div>
    </div>

        <div class="row gx-2 gy-2 mt-2">
            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya Selatan</span>
                    </div>
                    <h1>Jl. Manunggal Kebonsari No. 05 Jambangan, Surabaya</h1>
                    <p>
                        Monday - Sunday (09.00 - 20.00)
                    </p>
                    <div class="d-flex gap-2">
                        <a href="https://www.google.com/maps/place/Laundry+Sepatu+Surabaya+(Scarwash+Jambangan)/@-7.3277077,112.7102674,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7fc9f986b6fdb:0xe7df8bd037983099!8m2!3d-7.327713!4d112.7128423!16s%2Fg%2F11fz9yr7pz?entry=ttu" class="btn btn-dark">Location</a>
                        <a href="https://api.whatsapp.com/send/?phone=6285706237900" class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya Pusat</span>
                    </div>
                    <h1>Jl. Dharmahusada Stand No. 14, Surabaya</h1>
                    <p>
                        Monday - Sunday (09.00 - 20.00)
                    </p>
                    <div class="d-flex gap-2">
                        <a href="https://www.google.com/maps/place/Laundry+Sepatu+Surabaya+(Scarwash+Dharmahusada)/@-7.2659841,112.7439513,15z/data=!3m1!4b1!4m6!3m5!1s0x2dd7fb66387222e5:0xec4739245ca18d8!8m2!3d-7.2660058!4d112.7624054!16s%2Fg%2F11h1hn9pnv?entry=ttu" class="btn btn-dark">Location</a>
                        <a href="https://api.whatsapp.com/send/?phone=6285706237900" class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya Barat</span>
                    </div>
                    <h1>Jl. Raya Lidah Wetan No. 5 Surabaya</h1>
                    <p>
                        Monday - Sunday (09.00 - 20.00)
                    </p>
                    <div class="d-flex gap-2">
                        <a href="https://www.google.com/maps/place/SCAR+WASH+Laundry+Sepatu+Surabaya/@-7.3080659,112.6708719,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7fdeb23cd86e1:0x5a6f4ff6784a73dc!8m2!3d-7.3080659!4d112.6708719!16s%2Fg%2F11hz2dpgw_?entry=ttu" class="btn btn-dark">Location</a>
                        <a href="https://api.whatsapp.com/send/?phone=6285706237900" class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya Barat</span>
                    </div>
                    <h1>Jl. Ruko Northwest Boulevard nv1 No. 23, Citraland Utara, Surabaya</h1>
                    <p>
                        Monday - Sunday (09.00 - 20.00)
                    </p>
                    <div class="d-flex gap-2">
                        <a href="https://www.google.com/maps/place/Laundry+Sepatu+Surabaya+(Scarwash+Citraland)/@-7.2548253,112.5553399,12z/data=!4m10!1m2!2m1!1sscar+wash+ruko+north+west!3m6!1s0x2dd7fd704d13af07:0x3c8f13b19de7f899!8m2!3d-7.2548253!4d112.6253777!15sChlzY2FyIHdhc2ggcnVrbyBub3J0aCB3ZXN0WhsiGXNjYXIgd2FzaCBydWtvIG5vcnRoIHdlc3SSARBzaG9lX3JlcGFpcl9zaG9wmgEkQ2hkRFNVaE5NRzluUzBWSlEwRm5TVU4xWHpSTGRqZFJSUkFC4AEA!16s%2Fg%2F11rw3bvzc0?entry=ttu" class="btn btn-dark">Location</a>
                        <a href="https://api.whatsapp.com/send/?phone=6285706237900" class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya Timur</span>
                    </div>
                    <h1>Jl. Gebang Lor No. 31, Sukolilo, Surabaya</h1>
                    <p>
                        Monday - Sunday (09.00 - 20.00)
                    </p>
                    <div class="d-flex gap-2">
                        <a href="https://www.google.com/maps/place/Laundry+Sepatu+%26+Barbershop+Surabaya+(Scarwash+Sukolilo)/@-7.2813403,112.7868924,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7fb0159dcbd95:0x356042c74f1f9ed7!8m2!3d-7.2813403!4d112.7868924!16s%2Fg%2F11sprwsrvq?entry=ttu" class="btn btn-dark">Location</a>
                        <a href="https://api.whatsapp.com/send/?phone=6285706237900" class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Sidoarjo</span>
                    </div>
                    <h1>Jl. Pecantingan No. 74, Sekardangan, Sidoarjo</h1>
                    <p>
                        Monday - Sunday (09.00 - 20.00)
                    </p>
                    <div class="d-flex gap-2">
                        <a href="https://www.google.com/maps/place/Scarwash+Sidoarjo+-+Cuci+Sepatu/@-7.4681926,112.7275036,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7e7e90270df49:0x4f591246139be92b!8m2!3d-7.4681926!4d112.7275036!16s%2Fg%2F11ppb_82xf?entry=ttu" class="btn btn-dark">Location</a>
                        <a href="https://api.whatsapp.com/send/?phone=6285706237900" class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Sidoarjo</span>
                    </div>
                    <h1>Jl. Raya Wadung Asri No. 26, Waru, Sidoarjo</h1>
                    <p>
                        Monday - Sunday (09.00 - 20.00)
                    </p>
                    <div class="d-flex gap-2">
                        <a href="https://www.google.com/maps/place/Scar+wash+Cuci+sepatu+dan+tas/@-7.3438574,112.7680362,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7fba4581167cb:0xa75017431d49652c!8m2!3d-7.3438574!4d112.7680362!16s%2Fg%2F11v5g0w2ny?entry=ttu" class="btn btn-dark">Location</a>
                        <a href="https://api.whatsapp.com/send/?phone=6285706237900" class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <hr />

    <script>
        /**
         * SCRIPT TO CHANGE HEADER BACKGROUND
         **/
        const header = document.querySelector('header');

        // Listen for the scroll event
        window.addEventListener('scroll', function () {
            // Check the scroll position
            const scrollPosition = window.scrollY;

            // Change the background color if scroll position is 100 or more
            if (scrollPosition >= 100) {
                header.style.backgroundColor = 'white'; // Change the color to your desired value
            } else {
                header.style.backgroundColor = 'transparent'; // Change the color to your desired value
            }
        });

        /**
         * SCRIPT TO SHOW MOBILE MENU
         **/
        const menu = document.getElementById('menu')

        function showMenu() {
            if (menu.classList.contains('show')) {
                menu.classList.remove("show")
                menu.classList.add("hide")
            } else {
                menu.classList.remove("hide")
                menu.classList.add("show")
            }
        }

    </script>
</body>

</html>
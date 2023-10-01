@extends('template.blog')
<body>
    <!-- WHITE HAEDER -->
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
    <section style="padding-top:100px;">
        <div class="text-center bg-black text-white py-5">
            <h1>PRICE LIST</h1>
            
        </div>
    </section>
    <section class="container py-5">
    <div>
        <img src="{{asset('yesblog')}}/pc.jpg" alt="Layanan Shoes and Care" width="100%">
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
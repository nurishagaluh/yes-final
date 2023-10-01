<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="{{asset('yesblog')}}/style.css" />
    <title>ScarWash</title> 
    <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/feather/feather.css">

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .debug {
            border: 2px solid red;
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    @yield('header')

    @yield('section')

    <!-- FOOTER -->
    <footer class="py-5 container">
        <div class="row">
            <div class="col-lg-4">
                <b>Contact Us</b>
                <p>081259899595</p>
                <b>Line</b>
                <p>scarwash</p>
                <b>Facebook</b>
                <p>Scar Wash</p>
                <b>Instagram</b>
                <p>scar.wash</p>
                <b>Email</b>
                <p>scar.wash17@gmail.com</p>
            </div>

            <div class="col-lg-8">
                <b>Surabaya Store</b>
                <p>Jl. Manunggal Kebonsari No. 05, Jambangan</p>
                <p>Jl. Dharmahusada Stand No. 14</p>
                <p>Jl. Raya Lidah Wetan No. 5</p>
                <p>Jl. Ruko Northwest Boulevard nv1 No. 23, Citraland Utara</p>
                <p>Jl. Gebang Lor No. 31, Sukolilo</p>
                <b>Sidoarjo Store</b>
                <p>Jl. Pecantingan No. 74, Sekardangan</p>
                <p>Jl. Raya Wadung Asri No. 26, Waru</p>
            </div>
        </div>
        <hr />
        <div class="text-center">
            Copyright by Peduli Digital x Yes Tech : by Rico Arisandy
        </div>
    </footer>

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
                header.style.backgroundColor = 'black'; // Change the color to your desired value
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
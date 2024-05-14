<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOTFLIX</title>

    <link rel="stylesheet" href="/css/app.css"/>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>
<body class="font-sans bg-gray-950 text-white">
    <nav class="border-b border-gray-800 ">
        <div class="container md:flex md:items-center mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="#">
                    <img class="w-36" src="{{ asset('images/NotFlix.png') }}" alt="Logo">
                </a>
                <span class="text-3xl cursor-pointer md:hidden block">
                    <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                </span>
            </div>
            <div class="ml-16 ">
                <ul class="md:flex md:items-center z-[90] md:z-auto md:static
                absolute right-3 w-32 md:w-auto md:py-0 gap-6 md:pl-0 pl-7
                md:opacity-100 opacity-0 transition-all rounded-xl
                ease-in duration-200  bg-slate-800 md:bg-inherit
                border-gray-800 md:border-none font-semibold">
                    <li class="my-6 md:my-0">
                        <a class="hover:text-red-500 " href="#">Movies</a>
                    </li>
                    <li class="my-6 md:my-0">
                        <a class="hover:text-red-500" href="#">TV Shows</a>
                    </li>
                    <li class="my-6 md:my-0">
                        <a class="hover:text-red-500" href="#">Actors</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        function Menu(e) {
          let list = document.querySelector("ul");

          e.name === "menu"
            ? ((e.name = "close"),
              list.classList.add("opacity-95"))
            : ((e.name = "menu"),
              list.classList.remove("opacity-95"));
        }
    </script>
    @yield('content')
</body>
</html>

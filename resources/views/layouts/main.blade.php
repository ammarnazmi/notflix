<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOTFLIX</title>
    <link rel="stylesheet" href="/css/app.css"/>

</head>
<body class="font-sans bg-gray-950 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex items-center font-semibold">
                <li>
                    <a href="#">
                        <img class="w-36" src="{{ asset('images/NotFlix.png') }}" alt="Logo">
                    </a>
                </li>
                <li class="ml-16">
                    <a class="hover:text-red-500" href="#">Movies</a>
                </li>
                <li class="ml-6">
                    <a class="hover:text-red-500" href="#">TV Shows</a>
                </li>
                <li class="ml-6">
                    <a class="hover:text-red-500" href="#">Actors</a>
                </li>
            </ul>

            <div class="items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:shadow-outline
                     focus:outline-none text-sm" placeholder="Search"/>
                     <div class="absolute top-0">
                        <svg class="fill-current text-gray-500 w-5 mt-2 ml-2" viewBox="0 0 24 24">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                          </svg>
                     </div>
                </div>
            </div>
        </div>


    </nav>
    @yield('content')
</body>
</html>

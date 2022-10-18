<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Café&Telescópios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <header class="sticky top-0 z-30">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button-->
                        <button type="button"
                            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400
                hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!--
                    Icon when menu is closed.

                    Heroicon name: outline/bars-3

                    Menu open: "hidden", Menu closed: "block"
                    -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!--
                    Icon when menu is open.

                    Heroicon name: outline/x-mark

                    Menu open: "block", Menu closed: "hidden"
                    -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        {{-- <div class="flex flex-shrink-0 items-center">
                    <img class="block h-8 w-auto lg:hidden"
                    src="https://cdn-icons-png.flaticon.com/512/1086/1086070.png?w=740&t=st=1665798431~exp=1665799031~hmac=47cc834f9e18625bb279d5eecdc24325d555e303ed78be79d01f39ef3bd95508" alt="Your Company">
                    <img class="hidden h-8 w-auto lg:block"
                    src="https://cdn-icons-png.flaticon.com/512/1086/1086070.png?w=740&t=st=1665798431~exp=1665799031~hmac=47cc834f9e18625bb279d5eecdc24325d555e303ed78be79d01f39ef3bd95508" alt="Your Company">
                </div> --}}
                        <div class="hidden sm:ml-6 sm:block">
                            <div class="flex space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="#"
                                    class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                                    aria-current="page">Dashboard</a>

                                <a href="#"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2
                    rounded-md text-sm font-medium">Produtos</a>

                                <a href="#"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2
                    rounded-md text-sm font-medium">Estoque</a>

                                <a href="#"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2
                    rounded-md text-sm font-medium">Usuários</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                        aria-current="page">Dashboard</a>

                    <a href="#"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md
                text-base font-medium">Produtos</a>

                    <a href="#"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md
                text-base font-medium">Estoque</a>

                    <a href="#"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md
                text-base font-medium">Usuários</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mx-auto px-4 py-8">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="bg-red-400 p-1 rounded-md" type="submit">Logout</button>
        </form>
        @yield('content')
    </div>
</body>
</html>

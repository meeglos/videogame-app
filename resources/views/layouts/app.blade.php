<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-900 h-screen antialiased leading-none text-white">
    <div id="app">
        <nav class="mb-8 px-4 py-6 border-b border-gray-800">
            <div class="container mx-auto px-6 md:px-0 flex items-center justify-between">
                <div class="left-menu flex items-center">
                    <div class="mr-8">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <ul class="flex text-gray-600 space-x-4 small-caps">
                        <li><a href="#" class="hover:text-gray-300">games</a></li>
                        <li><a href="#" class="hover:text-gray-300">reviews</a></li>
                        <li><a href="#" class="hover:text-gray-300">offers</a></li>
                        <li><a href="#" class="hover:text-gray-300">coming soon</a></li>
                    </ul>
                </div>
                <div class="right-menu flex items-center">
                    <div class="search relative mr-4">
                        <input type="text" name="search"
                            class="bg-gray-800 text-sm rounded-full px-3 py-1 pl-8 focus:outline-none focus:shadow-outline text-gray-400"
                            placeholder="Search">
                        <div class="absolute top-0 flex items-center h-full ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff"
                                class="fill-current text-gray-400 w-4">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center">
                        @guest
                        <a class="no-underline hover:underline text-gray-300 text-sm p-3"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="no-underline hover:underline text-gray-300 text-sm p-3"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                        <span class="text-gray-300 text-sm pr-2">{{ Auth::user()->name }}</span>

                        <section>
                            <a href="{{ route('logout') }}"
                                class="no-underline hover:underline text-gray-300 text-sm p-3" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        </section>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-8">@yield('content')</main>

        <footer class="border-t border-gray-800 text-gray-100">
            <div class="container mx-auto py-6">
                Powered by <a href="#" class="underline hover:text-gray-500">IGDB API</a>
            </div>
        </footer>
    </div>
</body>

</html>

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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div id="app" class="h-screen flex flex-col">
        <header class="bg-blue-500 text-white">
            <div class="container mx-auto flex justify-between px-4">
                <a href="{{ url('/admin/dashboard') }}" class="text-2xl p-4 hover:bg-blue-600">{{ config('app.name', 'Laravel') }}</a>

                <button class="md:hidden text-xl" id="navigation" data-target="navigation-links">
                    <i class="fas fa-bars"></i>
                </button>
                <nav class="hidden w-full md:w-auto md:flex" id="navigation-links">
                    <div class="dropdown group flex relative hover:bg-blue-600">
                        <button class="p-2 flex items-center  px-4"><i class="fas fa-user"></i></button>
                        <div class="absolute hidden group-hover:block bg-blue-600 right-0 w-40" style="bottom: -100px;">
                            <a href="{{ route('admin.utilisateurs.show', ['user' => $userName]) }}" class="p-4 hover:bg-blue-700 block">Profile</a>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="p-4 hover:bg-blue-700 w-full text-left">Se déconnecter</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <main class="flex flex-grow flex-col md:flex-row">
            <section class="sidebar bg-gray-200 flex md:flex-col text-gray-700 justify-between md:justify-start">
                <a href="{{ route('admin.dashboard') }}" class="p-4 flex flex-grow md:flex-grow-0 justify-center items-center hover:bg-gray-300 {{ $active == 'dashboard' ? 'md:border-l-4 border-b-4 md:border-b-0 border-red-500' : '' }}" title="Dashboard"><i class="far fa-compass fa-2x"></i></a>
                <a href="{{ route('admin.utilisateurs.index') }}" class="p-4 flex flex-grow md:flex-grow-0 justify-center items-center hover:bg-gray-300 {{ $active == 'users' ? 'md:border-l-4 border-b-4 md:border-b-0 border-red-500' : '' }}" title="Utilisateurs"><i class="fas fa-user fa-2x"></i></a>
                <a href="{{ route('admin.cours.index') }}" class="p-4 flex flex-grow md:flex-grow-0 justify-center items-center hover:bg-gray-300 {{ $active == 'cours' ? 'md:border-l-4 border-b-4 md:border-b-0 border-red-500' : '' }}" title="Cours"><i class="fas fa-book-open fa-2x"></i></a>
            </section>
            <section class="content flex-grow p-4 container mx-auto flex flex-col">
                @yield('content')
            </section>
        </main>
    </div>
</body>
</html>

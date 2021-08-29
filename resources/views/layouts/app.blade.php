<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laracasts Video Games</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        @livewireStyles
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="bg-gray-900 text-white">
        <header class="border-b border-gray-800">
            <nav class="container mx-auto flex items-center justify-between px-4 py-6 flex-col lg:flex-row">
                <div class="flex items-center flex-col lg:flex-row">
                    <a href="/">
                        <img src="/images/laracasts-logo.svg" alt="laracasts" class="w-32 flex-none">
                    </a>
                    <ul class="flex ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0">
                        <li><a href="#" class="hover:text-gray-400">Games</a></li>
                        <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                        <li><a href="#" class="hover:text-gray-400">Coming soon</a></li>
                    </ul>
                </div>
                <div class="flex items-center mt-6 lg:mt-0">
                    <livewire:search-dropdown />
                    <div class="ml-6">
                        <a href="#">
                            <img src="/images/avatar.jpg" alt="avatar" class="rounded-full w-8">
                        </a>
                    </div>
                </div>
            </nav>
        </header>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <main class="py-8">
            @yield('content')
        </main>

        <footer class="border-t border-gray-800 ">
            <div class="container mx-auto px-4 py-6">
                Powered By <a href="#" class="underline hover:text-gray-400">IGDB API</a>
            </div>
        </footer>
        @livewireScripts
        <script src="/js/app.js"></script>
        @stack('scripts')
    </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <title>Gigs</title>
</head>

<body class="bg-stone-200 text-stone-700">

    <div class="sm:container mx-auto mt-10 p-10 bg-stone-50">
        @include('partials._navbar')
        <main class="container">
            <div class="mt-2 mx-auto rounded-md w-96 relative">
                <input type="text" name="search" id="search"
                    class="block w-full p-3 mx-auto rounded-md border-0 right-0" placeholder="Search" />
                <div class=" relative md:absolute sm:relative inset-y-0 right-0 flex items-center">
                    <a href="#"
                        class="rounded-lg text-center p-3 bg-stone-500 text-stone-200 hover:bg-stone-200 hover:text-stone-500 hover:shadow-xl w-full sm:w-full xs:w-64 md:w-30">Search</a>
                </div>
            </div>
            @yield('content')
        </main>
        @include('partials._footer')
    </div>


</body>

</html>

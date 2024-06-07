<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTec Collection</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="bg-black text-white pb-20">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-p border-white/5 text-white">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="logo" class="w-10 h-auto max-w-full">
                </a>
            </div>

            <div class="space-x-4 font-bold text-2xl">
                <a href="#" class="hover:text-gray-400 transition duration-300">Jobs</a>
                <a href="#" class="hover:text-gray-400 transition duration-300">Careers</a>
                <a href="#" class="hover:text-gray-400 transition duration-300">Salaries</a>
                <a href="#" class="hover:text-gray-400 transition duration-300">Companies</a>
            </div>

            @auth
                <div class="space-x-6 flex">
                    <x-forms.button><a href="/jobs/create" class="text-white hover:text-gray-400 transition duration-300">Job</a></x-forms.button>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <x-forms.button class="text-white hover:text-gray-400 transition duration-300">LogOut</x-forms.button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <x-forms.button><a href="/register" class="text-white hover:text-gray-400 transition duration-300">SignUp</a></x-forms.button>
                    <x-forms.button><a href="/login" class="text-white hover:text-gray-400 transition duration-300">LogIn</a></x-forms.button>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w[986px] mx-auto">
            {{ $slot }}
        </main>


    </div>
</body>

</html>

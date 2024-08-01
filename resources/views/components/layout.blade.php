<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel positions</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">

    @vite(['resources/js/app.js'])

</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="{{ url('/') }}">

                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="h-12" alt="logo">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="{{ url('/jobs') }}">Jobs</a>
                <a href="{{ url('/careers') }}">Careers</a>
                <a href="{{ url('/salaries') }}">Salaries</a>
                <a href="{{ url('/companies') }}">Companies</a>
            </div>
            
            @auth
            <div class="flex">
                <a href="{{url('/jobs/create')}}">Post a job</a>
                
                <form action="{{ url('/logout') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Logout</button>
                </form>
            </div>
            @endauth

            @guest
            <div class="space-x-6">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>

</html>

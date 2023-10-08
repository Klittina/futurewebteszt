<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futureweb tesztfeladat</title>
</head>
<body>
    <header></header>
    <nav>
    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Felhasználók</a>
                        <a href="{{ url('/loggedin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Saját posztjaim</a>
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Kommentek a saját posztjaimhoz</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Bejelentkezés</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regisztráció</a>
                        @endif
                    @endauth
                </div>
            @endif
    </nav>
    <article></article>
    <footer>Készítette: Szedlár Krisztina Mercédesz</footer>
    
</body>
</html>
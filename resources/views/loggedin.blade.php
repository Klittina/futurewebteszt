<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="/public/base.js" type="module"></script>
    <title>Futureweb tesztfeladat</title>
</head>
<body>
    <header></header>
    <nav>
    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <ul>
                    <li><a href="/logout">Kijelentkezés</a></li>
                    </ul>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Bejelentkezés</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regisztráció</a>
                        @endif
                    @endauth
                </div>
            @endif
    </nav>
    <article>
        <ul>
            <li id="felh">Felhasználók</li>
            <li id="post">Saját posztjaim</li>
            <li id="kom">Kommentek a saját posztjaimhoz</li>
        </ul>
    </article>
    <section></section>
    <footer>Készítette: Szedlár Krisztina Mercédesz</footer>
    
</body>
</html>
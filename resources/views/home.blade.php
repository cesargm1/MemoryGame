<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameHub</title>
    @vite(['resources/css/home.css'])

</head>
<body>

    <nav class="navbar">
        <div class="logo">GameHub</div>

     <div class="nav-links">
    <a href="/">Inicio</a>
    <a href="/contact">Contacto</a>

    @auth
        <p>Bienvenido/a {{ Auth::user()->nickname }} </p>
       <form method="post">
        @csrf
            <button class="logout-btn" type="submit">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="logout-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-9A2.25 2.25 0 002.25 5.25v13.5A2.25 2.25 0 004.5 21h9a2.25 2.25 0 002.25-2.25V15" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 8.25l3 3m0 0l-3 3m3-3H9" />
            </svg>
            </button>
       </form>
    @endauth

    @guest
        <a href="/login">Login</a>
        <a href="/register">Registro</a>
    @endguest
</div>
    </nav>

    <section class="hero">
        <h1>Juega Gratis Online</h1>
        <p>Descubre juegos divertidos y compite por las mejores puntuaciones.</p>

        <a href="#games" class="btn">Ver Juegos</a>
    </section>

    <section class="games" id="games">
        <h2>Juegos Disponibles</h2>

        <div class="games-grid">

            <div class="card">
                <div class="card-image">
                    <img class="card-img" src="/img/home/game-memory.webp" alt="memoria">
                </div>

                <div class="card-content">
                    <h3>Memory Game</h3>
                    <p>Encuentra todas las parejas y pon a prueba tu memoria.</p>
                    <a href="/memory-game" class="play-btn">
                        Jugar
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-image"></div>

                <div class="card-content">
                    <h3>Próximamente</h3>
                    <p>Nuevos juegos serán añadidos muy pronto.</p>

                    <a href="#" class="play-btn">
                        Próximamente
                    </a>
                </div>
            </div>

        </div>
    </section>

    <footer>
        © {{ date('Y') }} GameHub
    </footer>

</body>
</html>
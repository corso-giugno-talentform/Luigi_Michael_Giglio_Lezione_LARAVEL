<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $titolopagina ?? 'Titolo non trovato' }}</title>
    <link class="icon-website" rel="website icon" type="png" href="images/logo-transparent.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}"
                        href="{{ route('homepage') }}#home">Home</a>
                    <a class="nav-link" href="{{ route('homepage') }}#about">Chi Sono</a>
                    <a class="nav-link" href="{{ route('homepage') }}#service">Servizi</a>
                    <a class="nav-link" href="{{ route('homepage') }}#projects">Progetti</a>
                    <a class="nav-link" href="{{ route('homepage') }}#contact">Contatti</a>
                </div>

            </div>
        </div>
    </nav>

    {{ $slot }}

    <!-- FOOTER -->
    <footer class="text-center py-4 bg-dark text-white">
        <div class="container">
            <p class="mb-0">&copy; 2025 Il Mio Portfolio. Tutti i diritti riservati.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // durata animazioni in ms
            once: true // anima solo la prima volta che si scrolla
        });
    </script>
</body>

</html>

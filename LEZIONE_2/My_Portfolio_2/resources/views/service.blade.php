<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Il Mio Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../public/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-light shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="/">Home</a>
                    <a class="nav-link" href="/chisono">Chi Sono</a>
                    <a class="nav-link" href="#progetti">Progetti</a>
                    <a class="nav-link" href="#contattami">Contatti</a>
                    <a class="nav-link" href="#servizi">Servizi</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Il Mio Servizio</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service }}</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- FOOTER -->
    <footer class="text-center py-4 bg-dark text-white">
        <div class="container">
            <p class="mb-0">&copy; 2025 Il Mio Portfolio. Tutti i diritti riservati.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>

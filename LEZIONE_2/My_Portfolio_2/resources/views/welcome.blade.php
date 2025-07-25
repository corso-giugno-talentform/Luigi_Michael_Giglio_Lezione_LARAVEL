<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Il Mio Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">
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
                    <a class="nav-link active" href="#home">Home</a>
                    <a class="nav-link" href="#about">Chi Sono</a>
                    <a class="nav-link" href="#projects">Progetti</a>
                    <a class="nav-link" href="#contact">Contatti</a>
                    <a class="nav-link" href="/servizi">Servizi</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO / CAROUSEL -->
    <header id="home" class="position-relative">
        <!-- CAROUSEL -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/immagine_prova.jpg" class="d-block w-100 carousel-img" alt="slide 1">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/id/26/1920/800" class="d-block w-100 carousel-img" alt="slide 2">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/id/5/1920/800" class="d-block w-100 carousel-img" alt="slide 3">
                </div>
            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
        </div>

        <!-- OVERLAY CON CONTENUTO RESPONSIVE -->
        <div
            class="hero-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-white text-center px-3">
            <div class="hero-content">
                <h1 class="display-4 fw-bold">Chi Sono</h1>
                <p class="lead mt-3">
                    Mi chiamo Giglio Luigi Michael, ho 23 anni e vivo a Palermo. Sono un Web Developer full stack, con
                    una formazione accademica in Informatica e in procinto di conseguire la laurea. Nel mio percorso ho
                    maturato competenze solide sia nello sviluppo frontend che backend, grazie a corsi specifici e a
                    progetti pratici affrontati nel tempo. Nel frontend utilizzo HTML5, CSS3 e JavaScript per creare
                    interfacce moderne, responsive e ottimizzate per l’esperienza utente. Nel backend mi sono
                    specializzato in PHP e nel framework Laravel, con cui sviluppo applicazioni web robuste, sicure e
                    scalabili. Conosco l’intero ciclo di vita dello sviluppo web: dalla progettazione alla
                    realizzazione, fino al deployment. Lavoro con Git, MySQL, strumenti di testing e debugging, e seguo
                    le best practice di clean code e versionamento. Sono una persona curiosa, precisa e orientata al
                    risultato. Mi piace risolvere problemi, collaborare in team e affrontare nuove sfide tecnologiche.
                    Il mio obiettivo è crescere come sviluppatore e contribuire concretamente a progetti innovativi, in
                    aziende dinamiche o come freelancer.
                </p>
            </div>
        </div>
    </header>

    <!-- SERVIZI -->
    <div class="px-4 py-5 my-5 text-center">
        <div class="container"> <!-- contenitore -->
            <h1 class="display-5 fw-bold text-body-emphasis">I Miei Servizi</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($services as $service)
                    <div class="col">
                        <div class="card h-100 d-flex flex-column">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $service['titolo'] }}</h5>
                                <p class="card-text">{{ $service['descrizione'] }}</p>
                                <a href="/servizi/{{ $service['slug'] }}" class="btn btn-primary mt-auto">Dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> <!-- 🔚 Fine contenitore -->
    </div>



    <!-- PROGETTI -->
    <section id="projects" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">I Miei Progetti</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($projects as $project)
                    <div class="col">
                        <div class="card h-100 d-flex flex-column shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <img src="{{ $project['image'] }}" alt="{{ $project['titolo'] }}"
                                    class="card-img-top mb-3">
                                <h5 class="card-title">{{ $project['titolo'] }}</h5>
                                <p class="card-text">{{ $project['descrizione'] }}</p>
                                <a href="/projects/{{ $project['titolo'] }}" class="btn btn-primary mt-auto">Scopri di
                                    più</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>




    <!-- CONTATTI -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <a href="/contattami">
                <h2 class="text-center mb-4">Contattami</h2>
            </a>
            <form class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" required>
                </div>
                <div class="col-12">
                    <label class="form-label">Messaggio</label>
                    <textarea class="form-control" rows="4" required></textarea>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary px-5">Invia</button>
                </div>
            </form>
        </div>
    </section>

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

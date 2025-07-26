<x-main class="dark-bg">

    <x-slot name='titolopagina'>Homepage</x-slot>

    <!-- HERO -->
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
        <div id="about"
            class="hero-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-white text-center px-3">
            <div class="hero-content">
                <h1 class="display-4 fw-bold" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">Chi Sono
                </h1>
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
    <div id="service" class="px-4 py-5 my-5 text-center" data-aos="fade-up" data-aos-delay="200"
        data-aos-duration="1000">
        <div class="container">
            <h1 class="display-5 fw-bold text-white mb-5">I Miei Servizi</h1>
            <div class="row services-row g-4">

                @foreach ($services as $service)
                    <div class="col" data-aos="zoom-in" data-aos-delay="{{ 100 * $loop->index }}"
                        data-aos-duration="800">
                        <div class="card-led-clean">
                            @switch($service['slug'])
                                @case('marketing')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M3 3v18h18V3H3zm16 16H5V5h14v14zm-4.5-5.5h2v3h-2v-3zM8 8h8v2H8V8zm0 4h5v2H8v-2z" />
                                    </svg>
                                @break

                                @case('comunicazione')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M4 4h16v12H5.17L4 17.17V4zm0 14h16v2H4z" />
                                    </svg>
                                @break

                                @case('website')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M4 5v14h16V5H4zm14 12H6V7h12v10z" />
                                    </svg>
                                @break

                                @case('consulenza')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 15h-2v-2h2v2zm1.07-7.75l-.9.92C12.45 10.9 12 11.5 12 13h-2v-.5c0-1 .45-1.75 1.17-2.41l1.24-1.26a2 2 0 10-2.83-2.83l-.36.36L7.76 5.41A6.97 6.97 0 0112 4a7 7 0 012.07 13.65z" />
                                    </svg>
                                @break
                            @endswitch

                            <h5 class="text-uppercase">{{ $service['titolo'] }}</h5>
                            <p class="mt-2">{{ $service['descrizione'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>






    <!-- PROGETTI -->
    <section id="projects" class="py-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1200">
        <div class="container">
            <h2 class="text-center mb-4">I Miei Progetti</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($projects as $project)
                    <div class="col" data-aos="flip-left" data-aos-delay="{{ 150 * $loop->index }}"
                        data-aos-duration="800">
                        <div class="card h-100 d-flex flex-column shadow-sm">
                            <img src="{{ $project['image'] }}" alt="{{ $project['titolo'] }}" class="card-img-top mb-3">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $project['titolo'] }}</h5>
                                <p class="card-text">{{ $project['descrizione'] }}</p>
                                <a href="{{ route('project.detail', ['slug' => $project['slug']]) }}"
                                    class="btn-gradient-animated-green mt-auto">Scopri di più</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Pulsante Visualizza tutto -->
            <div class="text-center mt-4">
                <a href="{{ route('project.all') }}" class="btn btn-gradient-animated-green">Visualizza Tutti i
                    Progetti</a>

            </div>
        </div>
    </section>

    <!-- CONTATTI -->
    <section id="contact" class="py-5 bg-light" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
        <div class="container">
            <h2 class="text-center mb-4">Contattami</h2>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" id="nome" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" required>
                </div>
                <div class="col-12">
                    <label for="messaggio" class="form-label">Messaggio</label>
                    <textarea id="messaggio" class="form-control" rows="4" required></textarea>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn-gradient-animated-green px-5">Invia</button>
                </div>
            </form>
        </div>
    </section>

</x-main>

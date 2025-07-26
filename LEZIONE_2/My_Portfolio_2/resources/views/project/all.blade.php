<x-main>
    <x-slot name='titolopagina'>Tutti i progetti</x-slot>
    <div class="container py-5">
        <h1 class="text-center mb-4">Tutti i Progetti</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($projects as $project)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $project['image'] }}" alt="{{ $project['titolo'] }}" class="card-img-top">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $project['titolo'] }}</h5>
                            <p class="card-text">{{ $project['descrizione'] }}</p>
                            <a href="{{ route('project.detail', ['slug' => $project['slug']]) }}"
                                class="btn btn-gradient-animated-green mt-auto">
                                Scopri di più
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bottone Torna Indietro con colore diverso -->
        <div class="text-center mt-4">
            <a href="{{ url()->previous() }}" class="btn btn-gradient-animated-red">Torna Indietro</a>
        </div>
    </div>

    <style>
        /* Bottone verde lime / grigio */
        .btn-gradient-animated-green {
            background: linear-gradient(270deg, #2ecc71, #bdc3c7, #2ecc71);
            background-size: 600% 600%;
            color: #fff !important;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(46, 204, 113, 0.5);
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-gradient-animated-green:hover,
        .btn-gradient-animated-green:focus {
            animation: gradientShiftGreen 3s ease infinite;
            box-shadow: 0 6px 20px rgba(46, 204, 113, 0.8);
            transform: translateY(-3px);
            color: #fff !important;
        }

        @keyframes gradientShiftGreen {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Bottone rosso / arancio */
        .btn-gradient-animated-red {
            background: linear-gradient(270deg, #e74c3c, #f39c12, #e74c3c);
            background-size: 600% 600%;
            color: #fff !important;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(231, 76, 60, 0.5);
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-gradient-animated-red:hover,
        .btn-gradient-animated-red:focus {
            animation: gradientShiftRed 3s ease infinite;
            box-shadow: 0 6px 20px rgba(231, 76, 60, 0.8);
            transform: translateY(-3px);
            color: #fff !important;
        }

        @keyframes gradientShiftRed {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</x-main>

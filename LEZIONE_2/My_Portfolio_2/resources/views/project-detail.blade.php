<x-main>
    <x-slot name='titolopagina'>Progetti</x-slot>
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">{{ $project['titolo'] }}</h1>

        <img src="{{ $project['image'] }}" alt="{{ $project['titolo'] }}" class="img-fluid mb-4" style="max-width:600px;">

        <p class="lead">{{ $project['descrizione'] }}</p>

        <a href="{{ route('homepage') }}" class="btn btn-outline-primary mt-3">← Torna alla lista</a>
    </div>
</x-main>

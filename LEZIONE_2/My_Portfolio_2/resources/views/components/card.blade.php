@props(['project', 'showDetails' => true])

<div class="card">
    <div class="card-body">

        <img src="{{ $project['image'] }}" alt="">

        @if ($showDetails)
            <h5 class="card-title">{{ $project['titolo'] }}</h5>
        @endif

        <p class="card-text testo-di-prova-rosso">{{ $project['descrizione'] }}</p>

        @if ($showDetails)
            <a href="{{ route('project.detail', ['slug' => $project['slug']]) }}" class="btn btn-primary">Dettagli</a>
        @endif

        {{-- <a href="/progetti/{{ $project['slug'] }}" class="btn btn-primary">Dettagli</a> --}}
    </div>
</div>

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $services = [
        [
            'id' => 1,
            'slug' => 'marketing',
            'titolo' => 'Marketing',
            'descrizione' => 'Servizi di marketing digitale per aumentare la visibilità e il coinvolgimento.',
        ],
        [
            'id' => 2,
            'slug' => 'comunicazione',
            'titolo' => 'Comunicazione',
            'descrizione' => 'Strategie di comunicazione efficaci per aziende e brand.',
        ],
        [
            'id' => 3,
            'slug' => 'website',
            'titolo' => 'Website',
            'descrizione' => 'Progettazione e sviluppo siti web professionali e responsive.',
        ],
        [
            'id' => 4,
            'slug' => 'consulenza',
            'titolo' => 'Consulenza',
            'descrizione' => 'Consulenze personalizzate per migliorare i processi aziendali.',
        ],
        [
            'id' => 5,
            'slug' => 'mark',
            'titolo' => 'Mark',
            'descrizione' => 'Servizi vari di marketing e comunicazione.',
        ],
        [
            'id' => 6,
            'slug' => 'prova',
            'titolo' => 'Prova',
            'descrizione' => 'Descrizione di prova per testare il servizio.',
        ],
    ];

    $projects = [
        [
            'id' => 1,
            'slug' => 'Menu-per-Drinkeria',
            'titolo' => 'Menu per Drinkeria',
            'descrizione' => 'Progettazione e sviluppo di un menu digitale per una drinkeria, con design responsive e interattivo.',
            'image' => asset('images/immagine_prova_1.jpg'),
        ],
        [
            'id' => 2,
            'slug' => 'Sito-Web-Azienda-Orologi',
            'titolo' => 'Sito Web Azienda Orologi',
            'descrizione' => 'Creazione di un sito vetrina per un’azienda di orologi di lusso, con focus su eleganza e usabilità.',
            'image' => asset('images/immagine_prova_1.jpg'),
        ],
        [
            'id' => 3,
            'slug' => 'Portfolio-Personale',
            'titolo' => 'Portfolio Personale',
            'descrizione' => 'Realizzazione del mio portfolio personale per mostrare i miei progetti, con una struttura chiara e navigabile.',
            'image' => asset('images/immagine_prova_1.jpg'),
        ],
    ];
    return view('welcome', ['services' => $services, 'projects' => $projects]);
});
Route::get('/chisono', function () {
    return view('chisono');
});
Route::get('/progetti', function () {
    return view('project');
});

Route::get('/contattami', function () {
    return view('contact');
});

Route::get('/servizi', function () {
    $services = ['marketing', 'comunicazione', 'website', 'consulenza'];
    return view('services', ['services' => $services]);
});

Route::get('/servizi/{service}', function ($service) {
    return view('service', ['service' => $service]);
});

Route::get('/progetti/{project}', function ($project) {
    return view('welcome', ['project' => $project]);
});

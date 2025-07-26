<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Se usi modello Project, tienilo; altrimenti puoi rimuovere questa linea
use App\Models\Project;

class PageController extends Controller
{
    // Mostra homepage con servizi e progetti
    public function homepage()
    {
        $services = [
            [
                'titolo' => 'Marketing',
                'descrizione' => 'Realizzo strategie di marketing digitale mirate per aumentare la visibilità online del tuo brand e generare conversioni.',
                'slug' => 'marketing',
            ],
            [
                'titolo' => 'Comunicazione',
                'descrizione' => 'Gestione efficace della comunicazione aziendale, copywriting e creazione di contenuti per una presenza coerente e professionale.',
                'slug' => 'comunicazione',
            ],
            [
                'titolo' => 'Website',
                'descrizione' => 'Sviluppo siti web moderni, responsive e performanti usando HTML, CSS, JavaScript e Laravel, con focus su UX/UI.',
                'slug' => 'website',
            ],
            [
                'titolo' => 'Consulenza',
                'descrizione' => 'Supporto tecnico e strategico su progetti digitali, architettura software, full-stack e miglioramento processi aziendali.',
                'slug' => 'consulenza',
            ],
        ];

        $projects = [
            [
                'id' => 1,
                'slug' => 'menu-per-drinkeria',
                'titolo' => 'Menu per Drinkeria',
                'descrizione' => 'Progettazione e sviluppo di un menu digitale per una drinkeria, con design responsive e interattivo.',
                'image' => asset('images/immagine_prova_1.jpg'),
            ],
            [
                'id' => 2,
                'slug' => 'sito-web-azienda-orologi',
                'titolo' => 'Sito Web Azienda Orologi',
                'descrizione' => 'Creazione di un sito vetrina per un’azienda di orologi di lusso, con focus su eleganza e usabilità.',
                'image' => asset('images/immagine_prova_2.jpg'),
            ],
            [
                'id' => 3,
                'slug' => 'portfolio-personale',
                'titolo' => 'Portfolio Personale',
                'descrizione' => 'Realizzazione del mio portfolio personale per mostrare i miei progetti, con una struttura chiara e navigabile.',
                'image' => asset('images/immagine_prova_3.jpg'),
            ],
        ];

        return view('welcome', compact('services', 'projects'));
    }

    // Mostra dettaglio progetto tramite slug
    public function projectDetail($slug)
    {
        $projects = [
            [
                'id' => 1,
                'slug' => 'menu-per-drinkeria',
                'titolo' => 'Menu per Drinkeria',
                'descrizione' => 'Progettazione e sviluppo di un menu digitale per una drinkeria, con design responsive e interattivo.',
                'image' => asset('images/immagine_prova_1.jpg'),
            ],
            [
                'id' => 2,
                'slug' => 'sito-web-azienda-orologi',
                'titolo' => 'Sito Web Azienda Orologi',
                'descrizione' => 'Creazione di un sito vetrina per un’azienda di orologi di lusso, con focus su eleganza e usabilità.',
                'image' => asset('images/immagine_prova_2.jpg'),
            ],
            [
                'id' => 3,
                'slug' => 'portfolio-personale',
                'titolo' => 'Portfolio Personale',
                'descrizione' => 'Realizzazione del mio portfolio personale per mostrare i miei progetti, con una struttura chiara e navigabile.',
                'image' => asset('images/immagine_prova_3.jpg'),
            ],
        ];

        $project = collect($projects)->firstWhere('slug', $slug);

        if (!$project) {
            abort(404);
        }

        return view('project-detail', compact('project'));
    }

    // Mostra tutti i progetti (pagina “Visualizza tutto”)
    public function allProjects()
    {
        $projects = [
            [
                'id' => 1,
                'slug' => 'menu-per-drinkeria',
                'titolo' => 'Menu per Drinkeria',
                'descrizione' => 'Progettazione e sviluppo di un menu digitale per una drinkeria, con design responsive e interattivo.',
                'image' => asset('images/immagine_prova_1.jpg'),
            ],
            [
                'id' => 2,
                'slug' => 'sito-web-azienda-orologi',
                'titolo' => 'Sito Web Azienda Orologi',
                'descrizione' => 'Creazione di un sito vetrina per un’azienda di orologi di lusso, con focus su eleganza e usabilità.',
                'image' => asset('images/immagine_prova_2.jpg'),
            ],
            [
                'id' => 3,
                'slug' => 'portfolio-personale',
                'titolo' => 'Portfolio Personale',
                'descrizione' => 'Realizzazione del mio portfolio personale per mostrare i miei progetti, con una struttura chiara e navigabile.',
                'image' => asset('images/immagine_prova_3.jpg'),
            ],
        ];

        return view('project.all', compact('projects'));
    }
}

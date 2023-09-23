<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        "cards" => [
            [
                "id" => "1",
                "titolo" => "Assassinio sul Nilo",
                "Anno" => "2022",
                "Genere" => "Film di mistero/Giallo",
                "immagine" => "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQh9sTD2mCsfPJC8jYuiGMU2l7gO1Rb3-hDCaslpxAPtfGF8Dxc",
                "description" => "Mentre è in vacanza sul Nilo, il geniale detective di fama mondiale Hercule Poirot si ritrova a dover indagare sull'omicidio di una giovane ereditiera."
            ],
            [
                "id" => 2,
                "titolo" => "Tennet",
                "Anno" => "2023",
                "Genere" => "Azione",
                "immagine" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTO4gF2PRNu-lcMA6LSDc1KXF1Cz5KK11ZgKaD3XxtV6dJCut3x",
                "description" => "Un agente segreto riceve una sola parola come arma e viene inviato per prevenire l'inizio della Terza Guerra Mondiale. Deve viaggiare nel tempo e piegare le leggi della natura per avere successo nella sua missione."
            ],
            [
                "id" => "3",
                "titolo" => "Shazam! Furia degli dei",
                "Anno" => "2023",
                "Genere" => "Azione/Fantastico",
                "immagine" => "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ-8KWhzzff6wnViBau8dRbA8YSc0qOUbRq80QfNr2HrZn_zLyl",
                "description" => "Billy Batson e i suoi fratelli adottivi Freddy, Mary, Pedro, Eugene e Darla, anch'essi dotati di superpoteri, devono affrontare le tre figlie di Atlante: Hespera, Kalypso e Anthea."
            ],
            [
                "id" => "4",
                "titolo" => "Operazione Kandahar",
                "Anno" => "2023",
                "Genere" => "Film di mistero/Avventura",
                "immagine" => "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTYWArm9osGnJwZ_fkDigKGZ1nYd37hFQlACzAc7IVp5FO5qPrw",
                "description" => "Tom Harris è un agente sotto copertura freelance che lavora per la CIA per inserire malware in una struttura di ricerca nucleare iraniana. La copertura di Tom è ..."

            ],
        ]
    ];
    return view('home', $data);
});
Route::get('/Assassinio sul Nilo', function () {
    $data = [
        "card" => [
            "titolo" => "Assassinio sul Nilo",
            "Anno" => "2022",
            "Genere" => "Film di mistero/Giallo",
            "immagine" => "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQh9sTD2mCsfPJC8jYuiGMU2l7gO1Rb3-hDCaslpxAPtfGF8Dxc",
            "description" => "Mentre è in vacanza sul Nilo, il geniale detective di fama mondiale Hercule Poirot si ritrova a dover indagare sull'omicidio di una giovane ereditiera."
        ]
    ];
    return view('Assassino', $data);
});
Route::get('/Tennet', function () {
    $data = [
        "card" => [
            "id" => "2",
            "titolo" => "Tennet",
            "Anno" => "2023",
            "Genere" => "Azione",
            "immagine" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTO4gF2PRNu-lcMA6LSDc1KXF1Cz5KK11ZgKaD3XxtV6dJCut3x",
            "description" => "Un agente segreto riceve una sola parola come arma e viene inviato per prevenire l'inizio della Terza Guerra Mondiale. Deve viaggiare nel tempo e piegare le leggi della natura per avere successo nella sua missione."
        ]
    ];

    return view('Tennet', $data);
});

Route::get('/Shazam! Furia degli dei', function () {
    $data = [
        "card" => [
            "id" => "3",
            "titolo" => "Shazam! Furia degli dei",
            "Anno" => "2023",
            "Genere" => "Azione/Fantastico",
            "immagine" => "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ-8KWhzzff6wnViBau8dRbA8YSc0qOUbRq80QfNr2HrZn_zLyl",
            "description" => "Billy Batson e i suoi fratelli adottivi Freddy, Mary, Pedro, Eugene e Darla, anch'essi dotati di superpoteri, devono affrontare le tre figlie di Atlante: Hespera, Kalypso e Anthea."
        ]
    ];
    return view('Shazam', $data);
});
Route::get('/Operazione Kandahar', function () {
    $data = [
        "card" => [
            "id" => "4",
            "titolo" => "Operazione Kandahar",
            "Anno" => "2023",
            "Genere" => "Film di mistero/Avventura",
            "immagine" => "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTYWArm9osGnJwZ_fkDigKGZ1nYd37hFQlACzAc7IVp5FO5qPrw",
            "description" => "Tom Harris è un agente sotto copertura freelance che lavora per la CIA per inserire malware in una struttura di ricerca nucleare iraniana. La copertura di Tom è ..."
        ]
    ];
    return view('Operazione', $data);
});

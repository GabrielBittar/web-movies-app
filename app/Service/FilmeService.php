<?php

namespace app\Service;

use App\Repository\FilmeRepository;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class FilmeService
{

    /**
     * @var FilmeRepository
     */
    protected $filmeRepository;

    public function __construct(FilmeRepository $filmeRepository)
    {
        $this->filmeRepository = $filmeRepository;
    }

    public function buscaFilmesPopulares(): array
    {
        $filmesPopulares = Http::get(Config::get('app.api.url_base') . Config::get('app.uri.movie.popular')
         . Config::get('app.api.key') . "&" . Config::get('app.params.lingua.portugues'));

        $filmesPopulares = json_decode($filmesPopulares);

        return $filmesPopulares->results;
    }


}
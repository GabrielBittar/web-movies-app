<?php

namespace App\Http\Controllers;

use App\Service\FilmeService;

class HomeController extends Controller
{
     /**
     * @var FilmeService;
     */
    protected $filmeService;

    /**
     * 
     * @return void
     */
    public function __construct(FilmeService $filmeService)
    {
        $this->middleware('auth');
        $this->filmeService = $filmeService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $filmes = $this->filmeService->buscaFilmesPopulares();

        return View('home', ['filmes' => $filmes]);
        // return view('home');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        
        $response = Http::get("https://rickandmortyapi.com/api/character");
        $data = $response->json('results');
        
        foreach ($data as $value) {
            $personajes[] = $value;
        }
        return view('home',["personajes" => $personajes]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dados = [
            'nome_loja' => 'Loja de Carros',
            'title' => 'Home'
        ];

        return view('home', $dados);
    }
}

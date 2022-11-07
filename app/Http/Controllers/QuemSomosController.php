<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuemSomosController extends Controller
{
    public function index()
    {
        $dados = [
            'nome_loja' => 'Loja de Carros',
            'title' => 'Quem Somos',
            'logo_img' =>'logo_loja.png',
        ];

        return view('quem-somos', $dados);
    }
}

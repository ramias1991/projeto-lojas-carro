<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $dados = [
            'nome_loja' => 'Loja de Carros',
            'title' => 'Contato',
            'logo_img' =>'logo_loja.png',
        ];

        return view('contato', $dados);
    }
}

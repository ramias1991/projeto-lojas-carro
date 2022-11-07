<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index()
    {
        $dados = [
            'nome_loja' => 'Loja de Carros',
            'title' => 'Estoque',
            'logo_img' =>'logo_loja.png',
        ];

        return view('estoque', $dados);
    }
}

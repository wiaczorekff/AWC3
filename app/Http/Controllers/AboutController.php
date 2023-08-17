<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $dados = [
            'title' => 'Sobre o Projeto',
            'description' => 'Este é um projeto Laravel incrível!'
        ];

        return view('about', $dados);
    }
}

    


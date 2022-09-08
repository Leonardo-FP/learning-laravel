<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Leonardo";
        $idade = 19;
        $array = [10, 20, 30, 40, 50];
        $nomes = ["Leo", "Astrid", "Freya", "Ingrid", "Lagertha"];

        return view(
            'welcome', 
            [
                'nome' => $nome, 
                'idade' => $idade, 
                'profissao' => "Programador",
                'array' => $array,
                'nomes' => $nomes
            ]
        );
    }

    public function create(){
       return view('events.create');
    }

    public function contact() {
        return view('contact');
    }
}

<?php

namespace App\Http\Controllers;

class PlanoController extends Controller
{
    public function index(){
        $planos = Plano::all();
        return view('planos/listar')->with('planos', $planos);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano;

class HomeController extends Controller
{
    public function carregaPlanos(){
        $planos = Plano::all();
        return view('maktub-seguros')->with('planos',$planos);
    }
}

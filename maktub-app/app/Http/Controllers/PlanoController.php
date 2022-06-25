<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanoController extends Controller
{
    public function index(){
        $planos = Plano::all();
        return view('planos/listar')->with('planos', $planos);
    }

    public function create(){
        return view('planos.cadastro');
    }

    public function delete($id){
        $planos = Plano::destroy($id);
        return redirect('/planos/listar');
    }

    public function edit($id){
        $plano = Plano::find($id);
        return view('planos.cadastro')->with('plano', $plano);
    }

    public function atualizar(Request $request, $id){

        $operadora = $request->input('operadora');
        $nomePlano = $request->input('nome');
        $coparticipacao = $request->input('coparticipacao');
        $cobertura = $request->input('cobertura');
        $reembolso = $request->input('reembolso');
        $hospitais = $request->input('hospitais');
        $valorPlano = $request->input('valor');
        $visivel = $request->input('visivel');

        $plano = Plano::find($id);

        $plano->operadora = $operadora;
        $plano->nome = $nomePlano;
        $plano->coparticipacao = $coparticipacao;
        $plano->cobertura = $cobertura;
        $plano->reembolso = $reembolso;
        $plano->hospitais = $hospitais;
        $plano->valor = $valorPlano;
        $plano->visivel = $visivel;

        $plano->update();

        return redirect('/planos/listar');
    }



    public function store(Request $request){
        $operadora = $request->input('operadora');
        $nomePlano = $request->input('nome');
        $coparticipacao = $request->input('coparticipacao');
        $cobertura = $request->input('cobertura');
        $reembolso = $request->input('reembolso');
        $hospitais = $request->input('hospitais');
        $valorPlano = $request->input('valor');
        $visivel = $request->input('visivel');

        $plano = new Plano();

        $plano->operadora = $operadora;
        $plano->nome = $nomePlano;
        $plano->coparticipacao = $coparticipacao;
        $plano->cobertura = $cobertura;
        $plano->reembolso = $reembolso;
        $plano->hospitais = $hospitais;
        $plano->valor = $valorPlano;
        $plano->visivel = $visivel;

        $plano->save();

        return redirect('/planos/listar');
    }

}
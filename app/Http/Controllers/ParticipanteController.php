<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Participante;

class ParticipanteController extends Controller
{
    public function show(){
        $participantes = Participante::get();
        return view('participante',['participantes' => $participantes]);
    }

    public function index(){
        return view('cadastro-participante');
    }

    public function create(Request $request){
        $participante = new participante();
        $participante -> nome = $request->input('nome');
        $participante -> telefone = $request->input('telefone');
        $participante -> presente = $request->input('presente');
        $participante -> save();
        return redirect()->route('participante.lista');

    }
    
}

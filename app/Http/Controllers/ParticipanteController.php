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
}

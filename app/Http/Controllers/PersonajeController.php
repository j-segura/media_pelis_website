<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Personaje;
use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    public function index(){
        $personajes = Personaje::orderBy('id', 'desc')->paginate(15);
        return view('tablas.personaje.index', compact('personajes'));
    }

    public function create(){
        $actors = Actor::all();
        return view('tablas.personaje.create', compact('actors'));
    }

    public function store(Request $request){
        Personaje::create($request->all());
        return redirect()->route('personajes_index');
    }

    public function edit(Personaje $personaje){
        $actors = Actor::all();
        return view('tablas.personaje.edit', compact(['personaje', 'actors']));
    }

    public function update(Request $request, Personaje $personaje){
        $personaje->update($request->all());
        return redirect()->route('personajes_index');
    }

    public function destroy(Personaje $personaje){
        $personaje->delete();
        return redirect()->route('personajes_index');
    }
}

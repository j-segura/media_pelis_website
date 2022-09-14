<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function index(){
        $generos = Genero::orderBy('id', 'desc')->paginate(15);
        return view('tablas.genero.index', compact('generos'));
    }

    public function create(){
        return view('tablas.genero.create');
    }

    public function store(Request $request){
        Genero::create($request->all());
        return redirect()->route('generos_index');
    }

    public function edit(Genero $genero){
        return view('tablas.genero.edit', compact('genero'));
    }

    public function update(Request $request, Genero $genero){
        $genero->update($request->all());
        return redirect()->route('generos_index');
    }

    public function destroy(Genero $genero){
        $genero->delete();
        return redirect()->route('generos_index');
    }

}

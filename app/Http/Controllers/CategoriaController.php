<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::orderBy('id', 'desc')->paginate(10);
        return view('categoria.index', compact('categorias'));
    }

    public function create(){
        return view('categoria.create');
    }

    public function store(Request $request){
        Categoria::create($request->all());
        return redirect()->route('categorias_index');
    }

    public function edit(Categoria $categoria){
        return view('categoria.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria){
        $categoria->update($request->all());
        return redirect()->route('categorias_index');
    }

    public function destroy(Categoria $categoria){
        $categoria->delete();
        return redirect()->route('categorias_index');
    }
}

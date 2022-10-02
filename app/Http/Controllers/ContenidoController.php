<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Contenido;
use App\Models\Genero;
use Illuminate\Http\Request;

class ContenidoController extends Controller
{
    public function index(){
        $recomendadas = Contenido::where('status', 3)->get();
        $estrenos = Contenido::where('status', 2)->get();
        $contenidos = Contenido::orderBy('id', 'desc')->paginate(9);
        
        return view('contenidos.index', compact('recomendadas', 'estrenos', 'contenidos'));      
    }

    public function show(Contenido $contenido){

        return view('contenidos.show', compact('contenido'));
    }

    public function categoria(Categoria $categoria){

        $contenidos = Contenido::where('categoria_id', $categoria->id)
                            ->latest('id')
                            ->paginate(9);

        return view('contenidos.categoria', compact('contenidos', 'categoria'));

    }

    public function genero(Genero $genero){
        $contenidos = $genero->contenidos()->latest('id')->paginate(9);
        return view('contenidos.genero', compact('contenidos', 'genero'));
    }
}

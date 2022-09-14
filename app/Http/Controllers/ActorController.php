<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActorController extends Controller
{
    public function index(){
        $actors = Actor::orderBy('id', 'desc')->paginate(10);
        return view('tablas.actor.index', compact('actors'));
    }

    public function create(){
        return view('tablas.actor.create');
    }

    public function store(Request $request)
    {                                                                                               

        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'foto' => 'required|image|max:2048',
        ]);

        $actor = $request->all();

        if($imagen = $request->file('foto')) {
            $rutaGuardarImg = 'imagenes/fotosActores/';
            $imagenActor = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenActor);
            $actor['foto'] = "$imagenActor";
        }

        Actor::create($actor);
        
        return redirect()->route('actors_index');
    }

    public function edit(Actor $actor){
        return view('tablas.actor.edit', compact('actor'));
    }

    public function update(Request $request, Actor $actor){

        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);

        $act = $request->all();
        if($imagen = $request->file('foto')){
            $rutaGuardarImg = 'imagenes/fotosActores/';
            $imagenActor = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenActor);
            $act['foto'] = "$imagenActor";
        }else{
            unset($act['foto']);
        }

        $actor->update($act);
        return redirect()->route('actors_index');
    }

    public function destroy(Actor $actor){
        $actor->delete();
        return redirect()->route('actors_index');
    }
}

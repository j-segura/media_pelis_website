<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use Illuminate\Http\Request;
use App\Models\Personaje;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personajes = Personaje::orderBy('id', 'desc')->get();
        return view('admin.personajes.index', compact('personajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actors = Actor::orderBy('name', 'asc')->pluck('name', 'id')->toArray();
        return view('admin.personajes.create', compact('actors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:personajes',
            'descripcion' => 'required',
            'actor_id' => 'required',
        ]);

        $personaje = Personaje::create($request->all());

        return redirect()->route('admin.personajes.edit', compact('personaje'))->with('info', 'El personaje se agrego con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Personaje $personaje)
    {
        return view('admin.personajes.show', compact('personaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Personaje $personaje)
    {
        $actors = Actor::orderBy('name', 'asc')->pluck('name', 'id')->toArray();
        return view('admin.personajes.edit', compact('personaje', 'actors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personaje $personaje)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:personajes,slug,$personaje->id",
            'descripcion' => 'required',
            'actor_id' => 'required',
        ]);

        $personaje->update($request->all());

        return redirect()->route('admin.personajes.edit', compact('personaje'))->with('info', 'El personaje se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personaje $personaje)
    {
        $personaje->delete();
        return redirect()->route('admin.personajes.index')->with('info', 'El personaje se elimino con exito');
    }
}

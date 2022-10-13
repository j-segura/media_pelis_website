<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = Actor::orderBy('id', 'desc')->paginate(20);
        return view('admin.actors.index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actors.create');
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
            'slug' => 'required|unique:actors',
            'foto' => 'required|image|max:2048',
            'link' => 'required',
        ]);

        $actor = $request->all();

        if ($foto = $request->file('foto')) {
            $rutaGuardarImg = 'imagenes/fotosActores/';
            $fotoActor = "actor" . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($rutaGuardarImg, $fotoActor);
            $actor['foto'] = "$fotoActor";
        }

        $actor = Actor::create($actor);

        return redirect()->route('admin.actors.edit', compact('actor'))->with('info', 'El actor se agrego con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        return view('admin.actors.show', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        return view('admin.actors.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:actors,slug,$actor->id",
            'foto' => 'image|max:2048',
            'link' => 'required',
        ]);

        $act = $request->all();

        if ($foto = $request->file('foto')) {
            $rutaGuardarImg = 'imagenes/fotosActores/';
            $fotoActor = "actor" . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($rutaGuardarImg, $fotoActor);
            $act['foto'] = "$fotoActor";
        } else {
            unset($actor['foto']);
        }

        $actor->update($act);

        return redirect()->route('admin.actors.edit', compact('actor'))->with('info', 'El actor se actualizo con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        $actor->delete();
        return redirect()->route('admin.actors.index')->with('info', 'El actor se elimino con exito!');
    }
}

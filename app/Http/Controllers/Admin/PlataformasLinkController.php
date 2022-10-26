<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contenido;
use Illuminate\Http\Request;
use App\Models\Plataformalink;

class PlataformasLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.plataformalinks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contenidos = Contenido::orderBy('titulo', 'asc')->pluck('titulo', 'id')->toArray();
        return view('admin.plataformalinks.create', compact('contenidos'));
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
            'plataforma' => 'required',
            'link' => 'required',
            'contenido_id' => 'required',
        ]);

        $plataformalink = Plataformalink::create($request->all());

        return redirect()->route('admin.plataformalinks.edit', compact('plataformalink'))->with('info', 'El link se agrego con exito');
    }

    /**
     * Display the specified resource.Plataformalink
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plataformalink $plataformalink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plataformalink $plataformalink)
    {
        $contenidos = Contenido::orderBy('titulo', 'asc')->pluck('titulo', 'id')->toArray();
        return view('admin.plataformalinks.edit', compact('plataformalink', 'contenidos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plataformalink $plataformalink)
    {
        $request->validate([
            'plataforma' => 'required',
            'link' => 'required',
            'contenido_id' => 'required',
        ]);

        $plataformalink->update($request->all());

        return redirect()->route('admin.plataformalinks.edit', compact('plataformalink'))->with('info', 'El link se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plataformalink $plataformalink)
    {
        $plataformalink->delete();
        return redirect()->route('admin.plataformalinks.index')->with('info', 'El link se elimino con exito');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Productor;
use Illuminate\Http\Request;


class ProductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.productors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productors.create');
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
            'slug' => 'required|unique:productors'
        ]);

        $productor = Productor::create($request->all());
        
        return redirect()->route('admin.productors.edit', compact('productor'))->with('info', 'El productor se creo con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Productor $productor)
    {
        return view('admin.productors.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Productor $productor)
    {
        return view('admin.productors.edit', compact('productor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productor $productor)
    {
        $request->validate([
            'name' => 'required',
            'name' => "required|unique:productors,slug,$productor->id"
        ]);

        $productor->update($request->all());

        return redirect()->route('admin.productors.edit', compact('productor'))->with('info', 'El productor se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productor $productor)
    {
        $productor->delete();
        return redirect()->route('admin.productors.index')->with('info', 'El productor se elimino con exito!');
    }
}

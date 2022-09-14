<?php

namespace App\Http\Controllers;

use App\Models\Productor;
use Illuminate\Http\Request;

class ProductorController extends Controller
{
    public function index(){
        $productors = Productor::orderBy('id', 'desc')->paginate(20);
        return view('tablas.productor.index', compact('productors'));
    }

    public function create(){
        return view('tablas.productor.create');
    }

    public function store(Request $request){
        Productor::create($request->all());
        return redirect()->route('productores_index');
    }

    public function edit(Productor $productor){
        return view('tablas.productor.edit', compact('productor'));
    }

    public function update(Request $request, Productor $productor){
        $productor->update($request->all());
        return redirect()->route('productores_index');
    }

    public function destroy(Productor $productor){
        $productor->delete();
        return redirect()->route('productores_index');
    }
}

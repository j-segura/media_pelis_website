<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Contenido;
use App\Models\Genero;
use App\Models\Personaje;
use App\Models\Productor;
use SebastianBergmann\Timer\Duration;

class ContenidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contenidos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $years = [
            '2022' => '2022',
            '2021' => '2021',
            '2020' => '2020',
            '2019' => '2019',
            '2018' => '2018',
            '2017' => '2017',
            '2016' => '2016',
            '2015' => '2015',
            '2014' => '2014',
            '2013' => '2013',
            '2012' => '2012',
            '2011' => '2011',
            '2010' => '2010',
            '2009' => '2009',
            '2008' => '2008',
            '2007' => '2007',
            '2006' => '2006',
            '2005' => '2005',
            '2004' => '2004',
            '2003' => '2003',
            '2002' => '2002',
            '2001' => '2001',
            '2000' => '2000',
            '1999' => '1999',
            '1998' => '1998',
            '1997' => '1997',
            '1996' => '1996',
            '1995' => '1995',
            '1994' => '1994',
            '1993' => '1993',
            '1992' => '1992',
        ];

        $categorias = Categoria::pluck('name', 'id');
        $generos = Genero::all();
        $productors = Productor::orderBy('name', 'asc')->get();
        $personajes = Personaje::orderBy('name', 'asc')->get();

        return view('admin.contenidos.create', compact('years', 'categorias', 'generos', 'productors', 'personajes'));
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
            'titulo' => 'required',
            'slug' => 'required|unique:contenidos',
            'portada' => 'required|image',
            'banner' => 'required|image',
            'duracion' => 'required',
            'sinopsis' => 'required',
            'trailer_link' => 'required',
            'año' => 'required',
            'status' => 'required|in:1,2,3',
            'subcategoria' => 'required|in:1,2,3',
            'categoria_id' => 'required',
            'generos' => 'required',
            'productors' => 'required',
            'personajes' => 'required',
        ]);

        $contenido = $request->all();

        if ($portada = $request->file('portada')) {
            $rutaGuardarImg = 'imagenes/contenido/portadas';
            $portadaContenido = "portada" . date('YmdHis') . "." . $portada->getClientOriginalExtension();
            $portada->move($rutaGuardarImg, $portadaContenido);
            $contenido['portada'] = "$portadaContenido";
        }

        if ($banner = $request->file('banner')) {
            $rutaGuardarImg = 'imagenes/contenido/banners';
            $bannerContenido = "banner" . date('YmdHis') . "." . $banner->getClientOriginalExtension();
            $banner->move($rutaGuardarImg, $bannerContenido);
            $contenido['banner'] = "$bannerContenido";
        }

        $contenido = Contenido::create($contenido); 

        if ($request->generos) {
            $contenido->generos()->attach($request->generos);
        }

        if ($request->productors) {
            $contenido->productors()->attach($request->productors);
        }

        if ($request->personajes) {
            $contenido->personajes()->attach($request->personajes);
        }

        return redirect()->route('admin.contenidos.index')->with('info', 'El contenido se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contenido $contenido)
    {
        return view('admin.contenidos.show', compact('contenido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contenido $contenido)
    {

        $years = [
            '2022' => '2022',
            '2021' => '2021',
            '2020' => '2020',
            '2019' => '2019',
            '2018' => '2018',
            '2017' => '2017',
            '2016' => '2016',
            '2015' => '2015',
            '2014' => '2014',
            '2013' => '2013',
            '2012' => '2012',
            '2011' => '2011',
            '2010' => '2010',
            '2009' => '2009',
            '2008' => '2008',
            '2007' => '2007',
            '2006' => '2006',
            '2005' => '2005',
            '2004' => '2004',
            '2003' => '2003',
            '2002' => '2002',
            '2001' => '2001',
            '2000' => '2000',
            '1999' => '1999',
            '1998' => '1998',
            '1997' => '1997',
            '1996' => '1996',
            '1995' => '1995',
            '1994' => '1994',
            '1993' => '1993',
            '1992' => '1992',
        ];

        $categorias = Categoria::pluck('name', 'id');
        $generos = Genero::all();
        $productors = Productor::orderBy('name', 'asc')->get();
        $personajes = Personaje::orderBy('name', 'asc')->get();

        return view('admin.contenidos.edit', compact('contenido', 'years', 'categorias', 'generos', 'productors', 'personajes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contenido $contenido)
    {
        $request->validate([
            'titulo' => 'required',
            'slug' => "required|unique:contenidos,slug,$contenido->id",
            'portada' => 'image',
            'banner' => 'image',
            'duracion' => 'required',
            'sinopsis' => 'required',
            'trailer_link' => 'required',
            'año' => 'required',
            'status' => 'required|in:1,2,3',
            'subcategoria' => 'required|in:1,2,3',
            'categoria_id' => 'required',
            'generos' => 'required',
            'productors' => 'required',
            'personajes' => 'required',
        ]);

        $contend = $request->all();

        if ($portada = $request->file('portada')) {
            $rutaGuardarImg = 'imagenes/contenido/portadas';
            $portadaContenido = "portada" . date('YmdHis') . "." . $portada->getClientOriginalExtension();
            $portada->move($rutaGuardarImg, $portadaContenido);
            $contend['portada'] = "$portadaContenido";
        }else{
            unset($contend['banner']);
        }

        if ($banner = $request->file('banner')) {
            $rutaGuardarImg = 'imagenes/contenido/banners';
            $bannerContenido = "banner" . date('YmdHis') . "." . $banner->getClientOriginalExtension();
            $banner->move($rutaGuardarImg, $bannerContenido);
            $contend['banner'] = "$bannerContenido";
        }else{
            unset($contend['banner']);
        }

        $contenido->update($contend); 

        if ($request->generos) {
            $contenido->generos()->detach($request->generos);
            $contenido->generos()->sync($request->generos);
        }

        if ($request->productors) {
            $contenido->productors()->detach($request->productors);
            $contenido->productors()->sync($request->productors);
        }

        if ($request->personajes) {
            $contenido->personajes()->detach($request->personajes);
            $contenido->personajes()->sync($request->personajes);
        }

        return redirect()->route('admin.contenidos.index')->with('info', 'El contenido se actulizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contenido $contenido)
    {
        $contenido->delete();
        return redirect()->route('admin.contenidos.index')->with('info', "$contenido->titulo se elimino con exito!");
    }
}

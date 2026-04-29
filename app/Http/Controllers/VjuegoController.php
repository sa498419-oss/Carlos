<?php

namespace App\Http\Controllers;

use App\Models\Vjuego;
use Illuminate\Http\Request;

class VjuegoController extends Controller
{
    public function   construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juegosUsuario = auth()->user()->vjuegos;
        return view('vjuegos.index', compact('juegosUsuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vjuegos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'titulo' => 'required',
            'consola' => 'required',
            'esrb' => 'size:1',
            'imagen' => 'required|image',
        ]);

        //obtiene la imagen del request y la guarda en
        //storage/app/public/upload-vjuegos
        $ruta_imagen = $request['imagen']->store('upload-vjuegos', 'public');

        auth()->user()->vjuegos()->create([
            'titulo' => $data['titulo'],
            'consola' => $data['consola'],
            'esrb' => $data['esrb'],
            'imagen' => $ruta_imagen,
        ]);
        return redirect()->route('vjuegos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vjuego $vjuego)
    {
        return view('vjuegos.show', compact('vjuego'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vjuego $vjuego)
    {
        return view('vjuegos.edit', compact('vjuego'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vjuego $vjuego)
    {
        $data = request()->validate([
            'titulo' => 'required|min:2',
            'consola' => 'required',
            'esrb' => 'size:1',
        ]);

        $vjuego->titulo = $data['titulo'];
        $vjuego->consola = $data['consola'];
        $vjuego->esrb = $data['esrb'];

        if (request('imagen')) {
            // obtine la imagen del request y la guarda en public/upload_vjuegos
            $ruta_imagen = $request['imagen']->store(
                'upload-vjuegos',
                'public'
            );

            $vjuego->imagen = $ruta_imagen;
        }
        $vjuego->save();

        return redirect()->route('vjuegos.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vjuego $vjuego)
    {
        $vjuego->delete();
        return redirect()->route('vjuegos.index');
    }
}

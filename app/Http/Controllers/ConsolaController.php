<?php

namespace App\Http\Controllers;

use App\Models\Consola;
use Illuminate\Http\Request;

class ConsolaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    public function index()
    {
        $consolasUsuario = auth()->user()->consolas;
        return view('consolas.index', compact('consolasUsuario'));
    }

    public function create()
    {
        return view('consolas.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'nombre' => 'required',
            'imagen' => 'required|image',
        ]);

        $ruta_imagen = $request['imagen']->store('upload-consolas', 'public');

        auth()->user()->consolas()->create([
            'nombre' => $data['nombre'],
            'imagen' => $ruta_imagen,
        ]);

        return redirect()->route('consolas.index');
    }

    public function show(Consola $consola)
    {
        return view('consolas.show', compact('consola'));
    }

    public function edit(Consola $consola)
    {
        return view('consolas.edit', compact('consola'));
    }

    public function update(Request $request, Consola $consola)
    {
        $data = request()->validate([
            'nombre' => 'required|min:2',
        ]);

        $consola->nombre = $data['nombre'];

        if (request('imagen')) {
            $ruta_imagen = $request['imagen']->store('upload-consolas', 'public');
            $consola->imagen = $ruta_imagen;
        }

        $consola->save();
        return redirect()->route('consolas.index');
    }

    public function destroy(Consola $consola)
    {
        $consola->delete();
        return redirect()->route('consolas.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Ordenador;
use App\Models\Marca;
use App\Models\Tipo;
use Illuminate\Http\Request;

/**
 * Class OrdenadorController
 * @package App\Http\Controllers
 */
class OrdenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenadores = Ordenador::paginate();

        return view('ordenador.index', compact('ordenadores'))
            ->with('i', (request()->input('page', 1) - 1) * $ordenadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordenador = new Ordenador();
        $marcas = Marca::pluck('nombre', 'id');
        $tipos = Tipo::pluck('tipo', 'id');
        return view('ordenador.create', compact('ordenador', 'marcas', 'tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ordenador::$rules);

        $ordenador = Ordenador::create($request->all());

        return redirect()->route('ordenadores.index')
            ->with('success', 'El ordenador se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordenador = Ordenador::find($id);

        return view('ordenador.show', compact('ordenador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordenador = Ordenador::find($id);
        $marcas = Marca::pluck('nombre', 'id');
        $tipos = Tipo::pluck('tipo', 'id');

        return view('ordenador.edit', compact('ordenador', 'marcas', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ordenador $ordenador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordenador $ordenador)
    {
        request()->validate(Ordenador::$rules);

        $ordenador->update($request->all());

        return redirect()->route('ordenadores.index')
            ->with('success', 'El ordenador se ha modificado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ordenador = Ordenador::find($id)->delete();

        return redirect()->route('ordenadores.index')
            ->with('success', 'El ordenador se ha eliminado correctamente');
    }
}

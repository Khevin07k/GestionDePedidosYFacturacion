<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Restaurante;
use App\Http\Requests\StoreRestauranteRequest;
use App\Http\Requests\UpdateRestauranteRequest;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $restaurantes = Restaurante::all();
//        die($restaurantes);

        return view('admin.restaurante.index', compact('restaurantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.restaurante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestauranteRequest $request)
    {
        $datosRestaurante = request()->except('_token');
        Restaurante::insert($datosRestaurante);
        return redirect()->route('restaurante.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurante $restaurante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurante $restaurante)
    {
        $restaurante = Restaurante::findOrFail($restaurante['id']);
        return view('admin.restaurante.edit', compact('restaurante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestauranteRequest $request, $id)
    {
        $datosRestaurante = request()->except(['_token', '_method']);
        CLiente::where('id', '=', $id)->update($datosRestaurante);
        Cliente::findOrFail($id);
        return redirect()->route('restaurante.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurante $restaurante)
    {
        $restaurante = Restaurante::findOrFail($restaurante['id']);
//        die($restaurante);
        $restaurante->delete();
        return redirect()->route('restaurante.index');
    }
}

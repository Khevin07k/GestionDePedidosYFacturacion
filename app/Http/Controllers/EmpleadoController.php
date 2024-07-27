<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Http\Requests\StoreEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;
use App\Models\Restaurante;
use Carbon\Carbon;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        $restaurante = Restaurante::all();
        return view('admin.empleado.index', ['empleados' => $empleados, 'restaurantes' => $restaurante]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurante = Restaurante::all();
        return view('admin.empleado.create', compact('restaurante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmpleadoRequest $request)
    {
        $datosEmpleado = request()->except('_token');
        $year =  date('Y', strtotime($datosEmpleado['FechaContratacion']));
        $mes =  date('m', strtotime($datosEmpleado['FechaContratacion']));
        $day =  date('d', strtotime($datosEmpleado['FechaContratacion']));
//        $fechaContratacion = Carbon::createFromFormat('d/m/Y', $datosEmpleado['FechaContratacion'])->format('Y-m-d');
//        return dd($fechaContratacion);
        $datosEmpleado['FechaContratacion'] =$year.'-'.$mes.'-'.$day;
//        $datosEmpleado['FechaContratacion'] = $fechaContratacion;
        Empleado::insert($datosEmpleado);
        return redirect()->route('empleado.index')->withErrors($request->messages());

    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        $empleado = Empleado::findOrFail($empleado['id']);
        return view('admin.empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpleadoRequest $request, $id)
    {
        $datosEmpleado = request()->except(['_token', '_method']);
        Empleado::where('id', '=', $id)->update($datosEmpleado);
        return redirect()->route('empleado.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado = Empleado::findOrFail($empleado['id']);
        $empleado->delete();
        return redirect()->route('empleado.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use Barryvdh\DomPDF\Facade\Pdf;
//use Nette\Utils\Image;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.m enu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        $datosMenu = request()->except('_token');
        if ($request->hasFile('FotoMenu')) {
            $file = $request->file('FotoMenu');
            $destinationPath = 'images/';
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file('FotoMenu')->move($destinationPath, $filename);
            $datosMenu['FotoMenu'] = $destinationPath . $filename;

        }else{
            $datosMenu['FotoMenu'] = 'images/sin_foto.jpg';
        }
        Menu::insert($datosMenu);
        return redirect()->route('menu.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('admin.menu.editar', ['menu' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, $id)
    {
        $datosMenu = $request->except('_token', '_method');
//        dd($datosMenu);


        if ($request->hasFile('FotoMenu')) {
            $file = $request->file('FotoMenu');
            $destinationPath = 'images/';
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file('FotoMenu')->move($destinationPath, $filename);
            $datosMenu['FotoMenu'] = $destinationPath . $filename;
        }
        Menu::where('id', '=', $id)->update($datosMenu);
        Menu::findOrFail($id);
//        $menu->update($datosMenu);

        return redirect()->route('menu.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu = Menu::findOrFail($menu['$id']);
        $menu->delete();
        return redirect()->route('menu.index');
    }
    public function generarReportePdf()
    {
        $menus = Menu::all();
        $pdf = PDF::loadView('pdf.menus',compact('menus'));
        return $pdf->download('carta.pdf');
    }
}

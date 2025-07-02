<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all(); // Obtenemos todos los registros
    return view('items.index', compact('items')); // Enviamos la variable a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
    Item::create($request->all());
    return redirect()->route('items.index');
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate(['name' => 'required']);
        $item->update($request->all());
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
         $item->delete(); // Elimina el registro de la base de datos
    return redirect()->route('items.index')->with('success', 'Item eliminado correctamente.');
    }
}

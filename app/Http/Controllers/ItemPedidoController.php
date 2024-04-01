<?php

namespace App\Http\Controllers;

use App\Models\ItemPedido;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item_pedidos = ItemPedido::all();
        return view('teste.item_pedidos.index', compact('item_pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $itemPedido = ItemPedido::findOrFail($id);
        return view('teste.item_pedidos.show', compact('itemPedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ItemPedido $itemPedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ItemPedido $itemPedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ItemPedido $itemPedido)
    {
        //
    }
}

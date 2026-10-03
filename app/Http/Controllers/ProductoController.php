<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        Log::info('Listando los productos');
        return Producto::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'precio' => 'required|numeric',
        ]);

        $producto = Producto::create($request->only('nombre', 'precio'));
        Log::info('Producto creado', $producto->toArray());

        return response()->json($producto, 201);
    }

    public function show(string $id)
    {
        Log::info('Mostrando el producto con id: ' . $id);
        return Producto::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        Log::info('Actualizando el producto con id: ' . $id);
        
        $producto = Producto::findOrFail($id);
        $producto->update($request->only('nombre', 'precio'));
        
        return response()->json($producto, 200);
    }

    public function destroy(string $id)
    {
        Log::info('Eliminando el producto con id: ' . $id);
        
        $producto = Producto::findOrFail($id);
        $producto->delete();
        
        return response()->json(null, 204);
    }
}
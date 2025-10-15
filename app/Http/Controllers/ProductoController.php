<?php
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'imagen' => 'required',
        ]);

        Producto::create($request->only('nombre', 'precio', 'imagen'));

        return redirect()->route('productos.index');
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'imagen' => 'required',
        ]);

        $producto->update($request->only('nombre', 'precio', 'imagen'));

        return redirect()->route('productos.index');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}

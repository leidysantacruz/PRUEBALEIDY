<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    public function index()
    {
        $prestamos = Prestamo::all();
        return view('prestamos.index', compact('prestamos'));
    }

    public function create()
    {
        return view('prestamos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_libro' => 'required',
            'ID_usuario' => 'required',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'required|date'
        ]);

        Prestamo::create($request->all());

        return redirect()->route('prestamos.index')
            ->with('success', 'Préstamo registrado correctamente.');
    }

    public function show($id)
    {
        $prestamo = Prestamo::find($id);
        return view('prestamos.show', compact('prestamo'));
    }



}

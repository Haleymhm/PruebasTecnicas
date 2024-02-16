<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\Usuario;

use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {
        return Tarea::with('usuario')->get();
    }

    public function store(Request $request)
    {
        $tarea = Tarea::create($request->all());
        $tarea->usuario()->associate($request->input('usuario_id'));
        $tarea->save();

        return response()->json($tarea, 201);
    }

    public function show(Tarea $tarea)
    {
        return $tarea->load('usuario');
    }

    public function update(Request $request, Tarea $tarea)
    {
        $tarea->update($request->all());
        $tarea->usuario()->associate($request->input('usuario_id'));
        $tarea->save();

        return response()->json($tarea);
    }

    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return response()->json(null, 204);
    }
}

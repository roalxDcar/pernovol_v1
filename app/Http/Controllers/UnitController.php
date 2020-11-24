<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Se obtiene un listado general de todos las unidades registrados
     * Url: /lista-unidades
     * Type: GET
     */
    public function getUnit()
    {
        $units = Unit::orderBy('unit_uni', 'DESC')->get();
        return view('unit.list', [
            'units' => $units,
        ]);
    }
    /**
     * Se almacena toda la informarión que es enviada desde el formulario para crear Unidad
     * Url: /nuevo-unidad/guardar
     * Type: POST
     */
    public function storeUnit(Request $request)
    {
        $unit             = new Unit;
        $unit->name_uni   = $request->name_uni;
        $unit->prefix_uni = $request->prefix_uni;
        $unit->save();
        return redirect()->route('get.unit')->with('status', 'Se registró Unidad');
    }

    /**
     * Se actualizara toda la información
     * Url: /editar-unidad/actualizar/{id}
     * Type: PUT
     */
    public function updateUnit(Request $request, $id)
    {
        $unit             = Unit::findOrFail($id);
        $unit->name_uni   = $request->name_uni;
        $unit->prefix_uni = $request->prefix_uni;
        $unit->update();
        return redirect()->route('get.unit')->with('status', 'Se actualizo la Unidad');
    }

    /**
     * Se actualiza el estado de la unidad
     * Url: /unidad/cambiar-estado/{id}
     * Type: PUT
     */
    public function stateUnit($id)
    {
        $unit            = Unit::findOrFail($id);
        $unit->state_uni = $unit->state_uni ? 0 : 1;
        $unit->update();
        return redirect()->route('get.unit')->with('status', 'Se actualizo estado de Unidad');
    }
}

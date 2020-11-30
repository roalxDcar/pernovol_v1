<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;

class BranchController extends Controller
{
    /**
     * Se obtiene un listado general de todos las sucursales registrados
     * Url: /lista-sucursales
     * Type: GET
     */
    public function getBranch()
    {
        $branches = Branch::orderBy('branch_bra', 'DESC')->get();
        return view('branch.list', [
            'branches' => $branches,
        ]);
    }
    /**
     * Se almacena toda la informarión que es enviada desde el formulario para crear sucursal
     * Url: /nuevo-sucursal/guardar
     * Type: POST
     */
    public function storeBranch(Request $request)
    {
        $branch           	 = new Branch;
        $branch->name_bra 	 = $request->name_bra;
        $branch->address_bra = $request->address_bra;
        $branch->phone_bra 	 = $request->phone_bra;
        $branch->save();
        return redirect()->route('get.branch')->with('status', 'Se registró Sucursal');
    }

    /**
     * Se actualizara toda la información
     * Url: /editar-sucursal/actualizar/{id}
     * Type: PUT
     */
    public function updateBranch(Request $request, $id)
    {
        $branch           	 = Branch::findOrFail($id);
        $branch->name_bra 	 = $request->name_bra;
        $branch->address_bra = $request->address_bra;
        $branch->phone_bra 	 = $request->phone_bra;
        $branch->update();
        return redirect()->route('get.branch')->with('status', 'Se actualizo la Sucursal');
    }

    /**
     * Se actualiza el estado de la sucursal
     * Url: /sucursal/cambiar-estado/{id}
     * Type: PUT
     */
    public function stateBranch($id)
    {
        $branch            = Branch::findOrFail($id);
        $branch->state_bra = $branch->state_bra ? 0 : 1;
        $branch->update();
        return redirect()->route('get.branch')->with('status', 'Se actualizo estado de Sucursal');
    }
}

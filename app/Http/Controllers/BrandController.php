<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Se obtiene un listado general de todos las marcas registrados
     * Url: /lista-marcas
     * Type: GET
     */
    public function getBrand()
    {
        $brands = Brand::orderBy('brand_bra', 'DESC')->get();
        return view('brand.list', [
            'brands' => $brands,
        ]);
    }
    /**
     * Se almacena toda la informarión que es enviada desde el formulario para crear Marca
     * Url: /nuevo-marca/guardar
     * Type: POST
     */
    public function storeBrand(Request $request)
    {
        $brand           = new Brand;
        $brand->name_bra = $request->name_bra;
        $brand->save();
        return redirect()->route('get.brand')->with('status', 'Se registró Marca');
    }

    /**
     * Se actualizara toda la información
     * Url: /editar-marca/actualizar/{id}
     * Type: PUT
     */
    public function updateBrand(Request $request, $id)
    {
        $brand           = Brand::findOrFail($id);
        $brand->name_bra = $request->name_bra;
        $brand->update();
        return redirect()->route('get.brand')->with('status', 'Se actualizo la Marca');
    }

    /**
     * Se actualiza el estado de la marca
     * Url: /marca/cambiar-estado/{id}
     * Type: PUT
     */
    public function stateBrand($id)
    {
        $brand            = Brand::findOrFail($id);
        $brand->state_bra = $brand->state_bra ? 0 : 1;
        $brand->update();
        return redirect()->route('get.brand')->with('status', 'Se actualizo estado de Marca');
    }
}

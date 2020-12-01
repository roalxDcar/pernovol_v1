<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use App\Provider;
use App\Branch;
use App\Product;

class PurchaseController extends Controller
{
    /**
     * Se obtiene un listado general de todos las compras registrados
     * Url: /lista-compras
     * Type: GET
     */
    public function getPurchase()
    {
        $purchases = Purchase::orderBy('purchase_pur', 'DESC')->get();
        return view('purchase.list', [
            'purchases' => $purchases,
        ]);
    }

    /**
     * Se obtiene un listado general de todos las compras registrados
     * Url: /nueva-compra
     * Type: GET
     */
    public function createPurchase()
    {
        $products  = Product::get();
        $providers = Provider::get();
        $branches  = Branch::get();
        return view('purchase.new',[
            'providers' => $providers,
            'branches'  => $branches,
            'products'  => $products
        ]);
    }
    /**
     * Se almacena toda la informarión que es enviada desde el formulario para crear compra
     * Url: /nuevo-compra/guardar
     * Type: POST
     */
    public function storePurchase(Request $request)
    {
        return $request->all();
        $purchase           	 = new Purchase;
        $purchase->name_bra 	 = $request->name_bra;
        $purchase->address_bra 	 = $request->address_bra;
        $purchase->phone_bra 	 = $request->phone_bra;
        $purchase->save();
        return redirect()->route('get.purchase')->with('status', 'Se registró Compra');
    }

    /**
     * Se actualizara toda la información
     * Url: /editar-compra/actualizar/{id}
     * Type: PUT
     */
    public function updatePurchase(Request $request, $id)
    {
        $purchase           	 = Purchase::findOrFail($id);
        $purchase->name_bra 	 = $request->name_bra;
        $purchase->address_bra 	 = $request->address_bra;
        $purchase->phone_bra 	 = $request->phone_bra;
        $purchase->update();
        return redirect()->route('get.purchase')->with('status', 'Se actualizo la Compra');
    }

}

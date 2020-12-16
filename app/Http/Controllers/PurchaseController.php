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
        //return $request->all();
        for($i=0; $i<count($request->product_pro); $i++)
        {
            //Actualizar cantidad de producto
            $product                      = Product::findOrFail($request->product_pro[$i]);
            $product->stock_prod          = $product->stock_prod + $request->quantity[$i];
            $product->purchase_price_prod = $request->price[$i];
            $product->update();
        }
        $purchase           	        = new Purchase;
        //$purchase->branch_pur           = $request->branch;
        $purchase->provider_pur         = $request->provider;
        $purchase->user_pur             = auth()->user()->id;
        $purchase->invoice_number_pur   = $request->invoice_number;
        $purchase->purchase_date_pur    = $request->date;
        $purchase->tribute_pur          = $request->tribute;
        $purchase->total_pur            = $request->total_purchase;
        $purchase->type_pur             = $request->type;
        $purchase->type_purchase_pur    = $request->type_purchase;
        $purchase->discount_pur         = $request->discount;
        $purchase->save();

        $purchase->purchases()->attach($request->product_pro);
        //$purchase->save();
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

    public function getProduct($id){
        $product = Product::findOrFail($id);
        return $product;
    }

    public function getReportPurchase(){
        return view('report.listPurchase');
    }

    public function reportPurchase(Request $request){
        $sales = Purchase::with('user','provider')
                    ->whereDate('purchase_date_pur','>=',$request->start)
                    ->whereDate('purchase_date_pur','<=',$request->end)
                    ->orderBy('purchase_pur', 'DESC')
                    ->get();
        return view('report.filterPurchase', [
            'sales' => $sales,
        ]);
    }

}

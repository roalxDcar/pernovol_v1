<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Client;
use App\Branch;
use App\Product;
use App\DetailSale;

class SaleController extends Controller
{
	/**
     * Se obtiene un listado general de todos las compras registrados
     * Url: /lista-compras
     * Type: GET
     */
    public function getSale()
    {
        $sales = Sale::with('user','client')->orderBy('sale_sal', 'DESC')->get();
        return view('sale.list', [
            'sales' => $sales,
        ]);
    }

    /**
     * Se obtiene un listado general de todos las compras registrados
     * Url: /nueva-compra
     * Type: GET
     */
    public function createSale()
    {
        $products  = Product::get();
        $clients   = Client::get();
        $branches  = Branch::get();
        $id_f      = Sale::where('type_sal',1)->orderBy('sale_sal','DESC')->first();
        $id_r      = Sale::where('type_sal',2)->orderBy('sale_sal','DESC')->first();
        return view('sale.new',[
            'clients'	=> $clients,
            'branches'  => $branches,
            'products'  => $products,
            'id_f'      => empty($id_f)?0:$id_f->number_sal,
            'id_r'      => empty($id_r)?0:$id_r->number_sal,
        ]);
    }
    /**
     * Se almacena toda la informarión que es enviada desde el formulario para crear compra
     * Url: /nuevo-compra/guardar
     * Type: POST
     */
    public function storeSale(Request $request)
    {
        //return $request->all();
        $sale           	        = new Sale;
        //$purchase->branch_pur           = $request->branch;
        $sale->client_sal           = $request->client;
        $sale->user_sal             = auth()->user()->id;
        $sale->invoice_number_sal   = $request->invoice_number;
        $sale->number_sal           = $request->invoice_number;
        $sale->purchase_date_sal    = $request->date;
        $sale->tribute_sal          = $request->tribute;
        $sale->total_sal            = $request->total_purchase;
        $sale->type_sal             = $request->type;
        $sale->type_purchase_sal    = $request->type_purchase;
        $sale->save();

        for($i=0; $i<count($request->product_pro); $i++)
        {
            //Actualizar cantidad de producto
            $product                      = Product::findOrFail($request->product_pro[$i]);
            $product->stock_prod          = $product->stock_prod - $request->quantity[$i];
            $product->update();

            $detailSale 			   = new DetailSale;
            $detailSale->sales_dsal    = $sale->sale_sal;
            $detailSale->product_dsal  = $product->product_prod;
            $detailSale->quantity_dsal = $request->quantity[$i];
            $detailSale->discount_dsal = $request->discount[$i];
            $detailSale->price_dsal	   = $request->price[$i];
            $detailSale->total_dsal	   = $request->price[$i] * $request->quantity[$i];
            $detailSale->save();
        }
        //$purchase->save();
        return redirect()->route('get.sale')->with('status', 'Se registró Venta');
    }

    /**
     * Se actualizara toda la información
     * Url: /editar-compra/actualizar/{id}
     * Type: PUT
     */
    public function updateSale(Request $request, $id)
    {
        $purchase           	 = Purchase::findOrFail($id);
        $purchase->name_bra 	 = $request->name_bra;
        $purchase->address_bra 	 = $request->address_bra;
        $purchase->phone_bra 	 = $request->phone_bra;
        $purchase->update();
        return redirect()->route('get.purchase')->with('status', 'Se actualizo la Compra');
    }

    public function storeNewClient(Request $request){
        $client = new Client;
        $client->name_cli    = $request->name;
        $client->ci_nit_cli  = $request->ci_nit;
        $client->email   = $request->email;
        $client->phone_cli   = $request->phone;
        $client->address_cli = $request->address;
        $client->save();
        return $client;
    }

    public function pdfSale($id){
        // $pdf = Sale::with('sales','detailSale')->where('sale_sal',$id)->first(); ->where('sale_sal',$id)
        $sale     = Sale::where('sale_sal',$id)->first();
        $products = Sale::with('user','client')
                        ->leftjoin('pv_detail_sales','pv_detail_sales.sales_dsal','=','pv_sales.sale_sal')
                        ->leftjoin('pv_products','pv_products.product_prod','=','pv_detail_sales.product_dsal')
                        ->where('sale_sal',$id)
                        ->get();
        // return [
        //     'sale'       =>  $sale, 
        //     'products'   =>  $products
        // ]; 
        return view('sale.pdf', [
            'sale'       =>  $sale, 
            'products'   =>  $products
        ]);
    }

    public function getReportSale(){
        return view('report.list');
    }

    public function reportSale(Request $request){
        $sales = Sale::with('user','client')
                    ->whereDate('purchase_date_sal','>=',$request->start)
                    ->whereDate('purchase_date_sal','<=',$request->end)
                    ->orderBy('sale_sal', 'DESC')
                    ->get();
        return view('report.filter', [
            'sales' => $sales,
        ]);
    }

}

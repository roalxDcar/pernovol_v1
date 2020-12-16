@extends('layouts.app')
@section('header_content')

<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">            
        <strong>
            Ventas
        </strong>
    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('get.sale') }}" style="color:black;">
                        Lista de Ventas
                    </a>
                </li>
                <li class="breadcrumb-item">
                    Reporte de Ventas
                </li>
            </ol>
        </div>
    </div>
</div>

@endsection
@section('content')

<section class="card">
    <div id="invoice-template" class="card-body p-4">
        <!-- Invoice Company Details -->
        <div id="invoice-company-details" class="row">
            <div class="col-sm-6 col-12 text-center text-sm-left">
                <div class="media row">
                    <div class="col-12 col-sm-3 col-xl-2">
                        <img src="{!! asset('assets/app-assets/images/logo/logo.png') !!}" alt="company logo" class="mb-1 mb-sm-0" />
                    </div>
                    <div class="col-12 col-sm-9 col-xl-10">
                        <div class="media-body">
                            <ul class="ml-2 px-0 list-unstyled">
                                <li class="text-bold-800"><b>"PERNOVOL"</b></li>
                                <li><b>De: </b>Hugo Orlando Tunqui Quirijota</li>
                                <li><b>CASA MATRIZ</b></li>
                                <li>Av. 6 de Agosto, Nro.47, Zona 21 de Enero,</li>
                                <li>Entre Av. Esquina 6 de Agosto y Av. hacia el Mar frente al cuartel Ingavi</li>
                                <li>Viacha, La Paz - Bolivia</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12 text-center text-sm-right">
                <ul class="ml-2 px-0 list-unstyled">
                    <li><h2><b>{{ $sale->type_sal==1?"FACTURA":"RECIBO" }}</b></h2></li>
                    <li><b>{{ $sale->type_sal==1?"N° DE FACTURA:":"N° DE RECIBO:" }}</b> {{ $sale->invoice_number_sal }}</li>
                    @if($sale->type_sal==1)
                        <li><b>NIT:</b>4795683010</li>
                    @endif
                    <li><b>Cliente :</b>{{ $sale->client->name_cli }}</li>

                    <li><b>NIT/CI :</b>{{ $sale->client->ci_nit_cli }}</li>

                    <li><b>Telf/Cel :</b>{{ $sale->client->phone_cli }}</li>
                </ul>

                <ul class="px-0 list-unstyled">
                </ul>
            </div>
        </div>
        <!-- Invoice Company Details -->

        <!-- Invoice Items Details -->
        <div id="invoice-items-details" class="pt-2">
            <div class="row">
                <div class="table-responsive col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th class="text-right">Producto</th>
                                <th class="text-right">Cantidad</th>
                                <th class="text-right">Precio C.</th>
                                <th class="text-right">Descuento</th>
                                <th class="text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sum = 0;
                            @endphp
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->code_prod }}</td>
                                    <td class="text-right">{{ $product->name_prod }}</td>
                                    <td class="text-right">{{ $product->quantity_dsal }}</td>
                                    <td class="text-right">{{ $product->price_dsal }} Bs.</td>
                                    <td class="text-right">{{ $product->discount_dsal }} Bs.</td>
                                    <td class="text-right">{{ $product->total_dsal-$product->discount_dsal }} Bs.</td>
                                    @php
                                       $sum+=$product->total_dsal-$product->discount_dsal; 
                                    @endphp
                                </tr>
                            @endforeach
                                <tr>
                                    <td></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"><b>SUMA</b></td>
                                    <td class="text-right">{{ $sum }} Bs.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"><b>IVA%</b></td>
                                    <td class="text-right">{{ $sale->tribute_sal }} %</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"><b>TOTAL</b></td>
                                    <td class="text-right">{{ $sale->total_sal }} Bs.</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Invoice Footer -->
        <div id="invoice-footer">
            <div class="row">
                <div class="col-sm-12 col-12 text-center">
                    <button type="button" class="btn btn-primary btn-print btn-lg my-1"><i class="la la-paper-plane-o mr-50"></i>
                        Imprimir
                    </button>
                </div>
            </div>
        </div>
        <!-- Invoice Footer -->

    </div>
</section>

@endsection
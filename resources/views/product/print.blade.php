@extends('layouts.app')
@section('header_content')

<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">            
        <strong>
            PRODUCTOS
        </strong>
    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('get.product') }}" style="color:black;">
                        LISTA DE PRODUCTOS
                    </a>
                </li>
                <li class="breadcrumb-item">
                    REPORTE DE PRODUCTOS
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
                                <li class="text-bold-800"><h1><b>"PERNOVOL"</b></h1></li>
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
                <h2><b>REPORTE DE PRODUCTOS</b></h2>
                <p class="pb-sm-3"><b>NIT:</b> 4795683010</p>
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
                                <th>CÓDIGO</th>
                                <th class="text-left">PRODUCTO</th>
                                <th class="text-left">CATEGORÍA</th>
                                <th class="text-center">UNIDAD</th>
                                <th class="text-center">STOCK</th>
                                <th class="text-center">P. COMPRA</th>
                                <th class="text-center">P. VENTA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->code_prod }}</td>
                                    <td class="text-left">{{ $product->name_prod }}</td>
                                    <td class="text-left">{{ $product->category->name_cat }}</td>
                                    <td class="text-center">{{ $product->unit->name_uni }}</td>
                                    <td class="text-center">{{ $product->stock_prod }}</td>
                                    <td class="text-center">{{ $product->purchase_price_prod }}</td>
                                    <td class="text-center">{{ $product->sale_price_prod }}</td>
                                </tr>
                            @endforeach
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
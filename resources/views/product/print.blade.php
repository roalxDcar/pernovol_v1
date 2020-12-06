@extends('layouts.app')
@section('header_content')

<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">            
        <strong>
            Productos
        </strong>
    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('get.product') }}" style="color:black;">
                        Lista de Productos
                    </a>
                </li>
                <li class="breadcrumb-item">
                    Reporte de Productos
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
                                <li class="text-bold-800">Pernovol</li>
                                <li>Av. 6 de Agosto, Nro.47,</li>
                                <li>Zona 21 de Enero,</li>
                                <li>Entre Av. Esquina 6 de Agosto y Av. hacia el Mar</li>
                                <li>frente al cuartel Ingavi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12 text-center text-sm-right">
                <h2>REPORTE DE PRODUCTOS</h2>
                <p class="pb-sm-3"># INV-00001</p>
                <ul class="px-0 list-unstyled">
                </ul>
            </div>
        </div>
        <!-- Invoice Company Details -->

        <div id="invoice-customer-details" class="row pt-2">
            <div class="col-sm-6 col-12 text-center text-sm-left">
                <p><span class="text-muted"><b>Municipio :</b></span> Viacha</p>
                <p><span class="text-muted"><b>Gran Actividad :</b></span> Comercio Minorista</p>
                <p><span class="text-muted"><b>Actividad Principal :</b></span> 60204 - Venta al por menor de artículos de ferreteria, pinturas y productos de vidrio</p>
                <p><span class="text-muted"><b>Tipo de Contribuyente :</b></span> Empresas Unipersonales</p>
            </div>
            <div class="col-sm-6 col-12 text-center text-sm-right">
                <ul class="px-0 list-unstyled">
                    <li class="text-bold-800"><b>NIT:</b></li>
                    <li>Régimen General,</li>
                    <li>4795683010</li>
                </ul>
            </div>
        </div>

        <!-- Invoice Items Details -->
        <div id="invoice-items-details" class="pt-2">
            <div class="row">
                <div class="table-responsive col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th class="text-right">Producto</th>
                                <th class="text-right">Categoria</th>
                                <th class="text-right">Marca</th>
                                <th class="text-right">U. de Medida</th>
                                <th class="text-right">Stock</th>
                                <th class="text-right">Precio C.</th>
                                <th class="text-right">Precio V.</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->code_prod }}</td>
                                    <td class="text-right">{{ $product->name_prod }}</td>
                                    <td class="text-right">{{ $product->category->name_cat }}</td>
                                    <td class="text-right">{{ $product->brand->name_bra }}</td>
                                    <td class="text-right">{{ $product->unit->name_uni }}</td>
                                    <td class="text-right">{{ $product->stock_prod }}</td>
                                    <td class="text-right">{{ $product->purchase_price_prod }}</td>
                                    <td class="text-right">{{ $product->sale_price_prod }}</td>
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
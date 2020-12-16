@extends('layouts.app')
@section('header_content')

<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">            
        <strong>
            Reporte Compras
        </strong>
    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('get.product') }}" style="color:black;">
                        Lista de Compras
                    </a>
                </li>
            </ol>
        </div>
    </div>
</div>

@endsection
@section('content')

<section id="basic-buttons">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="form-group col-md-2" style="float: left; padding-top: 25px;"><b>Compras</b></h3>
                                <form action="{{ route('purchase.report') }}" method="POST">
                                    @csrf
                                    <div class="form-group col-md-2" style="float: left;">
                                        <label><strong>Fecha inicio:</strong></label>
                                        <input id="start" type="date" class="form-control" name="start" value="{{ old('start') }}">
                                    </div>
                                    <div class="form-group col-md-2" style="float: left;">
                                        <label for=""><strong>Fecha fin:</strong></label>
                                        <input id="end" type="date" class="form-control" name="end" value="{{ old('end') }}">
                                    </div>
                                    <div class="form-group col-md-2" style="float: left; padding-top: 25px;">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <i class="la la-file-pdf-o">
                                            </i>Filtrar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                <h2><b>REPORTE DE COMPRAS</b></h2>
                <p class="pb-sm-3"><b>NIT:</b> 4795683010</p>
                <ul class="px-0 list-unstyled">
                </ul>
            </div>
        </div>
        
        <div id="invoice-items-details" class="pt-2">
            <div class="row">
                <div class="table-responsive col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 20px;">
                                    ID
                                </th>
                                <th style="width: 80px;">
                                    Vendedor
                                </th>
                                <th style="width: 100px;">
                                    Proveedor
                                </th>
                                <th style="width: 80px;">
                                    Tipo Doc.
                                </th>
                                <th style="width: 80px;">
                                    N° Doc.
                                </th>
                                <th style="width: 150px;">
                                    Fecha Venta
                                </th>
                                <th style="width: 80px;">
                                    Total
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sales as $sale)
                            <tr class="odd" role="row">
                                
                                <td>
                                    {{ $sale->purchase_pur }}
                                </td>
                                
                                <td>
                                    {{ $sale->user->name }} {{ $sale->user->paternal }} {{ $sale->user->maternal }}
                                </td>

                                <td>
                                    {{ $sale->provider->name_manager_prov }}
                                </td>

                                <td class="sorting_1">
                                    {{ $sale->type_pur==1?"Factura":"Recibo" }}
                                </td>

                                <td class="sorting_1">
                                    {{ $sale->invoice_number_pur }}
                                </td>

                                <td class="sorting_1">
                                    {{ $sale->purchase_date_pur }}
                                </td>

                                <td class="sorting_1">
                                    {{ $sale->total_pur }}
                                </td>
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
@extends('layouts.app')
@section('header_content')
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">            
        <strong>
            Compras
        </strong>
    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('get.purchase') }}" style="color:black;">
                        Lista de Compras
                    </a>
                </li>
                <li class="breadcrumb-item">
                    Nueva Compra
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('content')
	<section id="row-separator-form-layouts">
        <form action="{{ route('store.purchase') }}" method="POST">
    	@csrf
		    <div class="row">
		        <div class="col-md-8" style="float: left;">
		            <div class="card">
		                <div class="card-content collapse show">
		                	<div class="card-header bg-primary">
		                		<div class="row">
                                	<div class="col-md-12" style="padding-left: 0px;">
	                                	<div class="col-md-4" style="float: left; padding-top: 10px;">
	                                		<h4 style="color: white;"><b>Detalle de Compra</b></h4>
	                                	</div>
		                                <div style="float: right;">
		                                	<a href="#">
								        		<button aria-expanded="false" aria-haspopup="true" class="btn btn-success round dropdown-menu-right px-2" style="margin-top: 5px;" type="button" id="newBranch">
									                <b><i class="la la-plus"></i> Nuevo Producto</b>
									            </button>
								        	</a>
		                                </div>
	                                </div>
                                </div>
		                	</div>
		                    <div class="card-body" style="padding:20px;">
	                            <div class="form-body">
	                                <div class="row">
	                                    <div class="col-md-12">
	                                        <fieldset>
		                                        <div class="input-group">
		                                        	<label style="color: black;"><b>Productos: </b></label>
		                                            <select class="form-control" name="branch">
							                            <option value="0" selected="">
							                                Seleccione Producto
							                            </option>
							                            @foreach($products as $product)
							                                <option value="{{ $product->product_prod }}">
							                                    {{ $product->name_prod }}
							                                </option>
							                            @endforeach
							                        </select>
		                                        </div>
		                                    </fieldset>
	                                    </div>
	                                </div>
	                            </div><br>
                            	<table class="table table-striped table-responsive">
	                                <thead class="bg-secondary" style="color: white;">
	                                    <tr role="row">
	                                        <th style="width: 100px;">
	                                            Código Producto
	                                        </th>
	                                        <th style="width: 200px;">
	                                            Producto
	                                        </th>
	                                        <th style="width: 100px;">
	                                            Cantidad
	                                        </th>
	                                        <th style="width: 120px;">
	                                            Precio
	                                        </th>
	                                        <th style="width: 50px;">
	                                            Acciones
	                                        </th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <tr>
	                                        
	                                        <td>
	                                            <input readonly="readonly" type="number" class="form-control" name="product_pro[]">
	                                        </td>

	                                        <td class="sorting_1">
	                                            sr6u
	                                        </td>

	                                        <td class="sorting_1">
	                                            <input type="number" class="form-control" name="quantity[]">
	                                        </td>

	                                        <td class="sorting_1">
	                                            <input type="number" class="form-control" name="price[]">
	                                        </td>
	                                        <td>
	                                            <button class="btn btn-icon btn-danger waves-effect waves-light" type="button">
	                                                <i class="la la-trash">
	                                                </i>
	                                            </button>
	                                        </td>

	                                    </tr>
	                                    <tr>
	                                        <td>
	                                        </td>
	                                        <td>
	                                        </td>
	                                        <td>
	                                            <b>SUMAS:</b> 
	                                        </td>
	                                        <td>
	                                            5
	                                        </td>
	                                        <td>
	                                        </td>
	                                    </tr>
                                     	<tr>
	                                        <td>
	                                        </td>
	                                        <td>
	                                        </td>
	                                        <td>
	                                            <b>IVA %:</b> 
	                                        </td>
	                                        <td>
	                                            13.0
	                                        </td>
	                                        <td>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td>
	                                        </td>
	                                        <td>
	                                        </td>
	                                        <td>
	                                            <b>TOTAL %:</b> 
	                                        </td>
	                                        <td>
	                                            <input type="number" class="form-control" name="total[]" value="13">
	                                        </td>
	                                        <td>
	                                        </td>
	                                    </tr>
	                                </tbody>
	                            </table>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="col-md-4" style="float: right;">
		        	<div class="card">
		                <div class="card-content collapse show">
		                	<div class="card-header bg-primary text-center">
		                		<h3 style="color: white;"><b>Total: 0 Bs</b></h3>
		                	</div>
		                    <div class="card-body">
		                        <div class="form-body">
		                            <div class="row">
		                                <div class="col-md-12">
		                                    <fieldset>
	                                        	<label style="color: black;" class="col-md-4"><b>Proveedor: </b></label><br>
	                                            <select class="form-control" name="provider">
						                            <option value="0" selected="">
						                                Seleccione Proveedor
						                            </option>
						                            @foreach($providers as $provider)
						                                <option value="{{ $provider->provider_pro }}">
						                                    {{ $provider->company_name_prov }}
						                                </option>
						                            @endforeach
						                        </select>
		                                    </fieldset>
		                                    <br>
		                                    <fieldset>
	                                        	<label style="color: black;" class="col-md-4"><b>Sucursal: </b></label>
	                                            <select class="form-control" name="branch">
						                            <option value="0" selected="">
						                                Seleccione Sucursal
						                            </option>
						                            @foreach($branches as $branch)
						                                <option value="{{ $branch->branch_bra }}">
						                                    {{ $branch->name_bra }}
						                                </option>
						                            @endforeach
						                        </select>
		                                    </fieldset>
		                                    <br>
	                                    	<fieldset class="col-md-6" style="float: left;">
	                                        	<label style="color: black;"><b>Impuesto: </b></label>
	                                        	<input type="text" readonly="readonly" class="form-control" name="tribute" value="13">
		                                    </fieldset>
	                                     	<fieldset class="col-md-6" style="float: left;">
	                                        	<label style="color: black;"><b>N° Factura: </b></label>
	                                        	<input type="text" class="form-control" name="invoice_number" placeholder="Ingresar N°">
		                                    </fieldset>  
		                                    <br><br><br><br>
	                                    	<fieldset class="col-md-6" style="float: left;">
	                                        	<label style="color: black;"><b>Tipo Comprobante: </b></label>
	                                            <select class="form-control" name="type">
						                            <option value="0" selected="">
						                                Seleccione Comprobante
						                            </option>
						                            <option value="1">
						                                Normal
						                            </option>
						                        </select>
		                                    </fieldset>
	                                     	<fieldset class="col-md-6" style="float: left;">
	                                        	<label style="color: black;"><b>Tipo de Pago: </b></label>
	                                            <select class="form-control" name="type_purchase">
						                            <option value="0" selected="">
						                                Seleccione Pago
						                            </option>
						                            <option value="1">
						                                Contado
						                            </option>
						                        </select>
		                                    </fieldset>                              
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="card-footer">
                                <button class="btn btn-primary btn-block" type="submit">
                                	<b>
                                		<span class="material-icons">
                                			shopping_cart
                                		</span> 
                                		Guardar Compra
                                	</b>
                                </button>
		                    </div>
		                </div>
		            </div>
		        </div>
	        </div>
        </form>
	</section>
@endsection
@extends('layouts.app')
@section('header_content')
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">            
        <strong>
            Proveedores
        </strong>
    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('get.provider') }}" style="color:black;">
                        Lista de Proveedores
                    </a>
                </li>
                <li class="breadcrumb-item">
                    Editar Proveedor
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('content')
	<section id="row-separator-form-layouts">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="card">

	                <div class="card-content collapse show">
	                    <div class="card-body">
	                        <form class="form form-horizontal row-separator" action="{{ route('update.provider',$provider->provider_prov) }}" method="POST">
	                        	@csrf
	                        	@method('PUT')
	                            <div class="form-body">
	                                <h4 class="form-section"><i class="la la-home"></i> Datos del Proveedor</h4>
	                                <div class="row">
	                                    <div class="col-md-4">
	                                        <div class="form-group row mx-auto">
	                                            <label class="col-md-3 label-control text-form-aling" style="text-align: left;" for="userinput1">Empresa</label>
	                                            <div class="col-md-9">
	                                                <input type="text" id="userinput1" class="form-control border-primary" value="{{ $provider->company_name_prov }}" placeholder="Ingresar nombre de la Empresa" name="company_name">
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <div class="form-group row mx-auto">
	                                            <label class="col-md-3 label-control text-form-aling" for="userinput2">NIT</label>
	                                            <div class="col-md-9">
	                                                <input type="text" id="userinput2" class="form-control border-primary" value="{{ $provider->nit_prov }}"placeholder="Ingresar NIT" name="nit">
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <div class="form-group row mx-auto">
	                                            <label class="col-md-3 label-control text-form-aling" for="userinput2">Dirección</label>
	                                            <div class="col-md-9">
	                                                <input type="text" id="userinput2" class="form-control border-primary" value="{{ $provider->address_prov }}"placeholder="Ingresar Dirección" name="address">
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>

	                                <h4 class="form-section"><i class="la la-user"></i> Datos del Contacto</h4>

	                                <div class="row">
	                                    <div class="col-md-4">
	                                        <div class="form-group row mx-auto">
	                                            <label class="col-md-3 label-control text-form-aling" for="userinput1">Encargado</label>
	                                            <div class="col-md-9">
	                                                <input type="text" id="userinput1" class="form-control border-primary" value="{{ $provider->name_manager_prov }}"placeholder="Ingresar nombre del Encargado" name="name_manager">
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <div class="form-group row mx-auto">
	                                            <label class="col-md-3 label-control text-form-aling" for="userinput2">Telefono</label>
	                                            <div class="col-md-9">
	                                                <input type="text" id="userinput2" class="form-control border-primary" value="{{ $provider->phone_prov }}"placeholder="Ingresar número de telefono" name="phone">
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <div class="form-group row mx-auto">
	                                            <label class="col-md-3 label-control text-form-aling" for="userinput2">Email</label>
	                                            <div class="col-md-9">
	                                                <input type="text" id="userinput2" class="form-control border-primary" value="{{ $provider->email_prov }}"placeholder="Ingresar Email" name="email">
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="form-actions text-right">
	                                <a href="{{ route('get.provider') }}">
	                                	<button type="button" class="btn btn-info mr-1 waves-effect waves-light">
		                                    <i class="la la-remove"></i> Cancelar
		                                </button>
	                                </a>
	                                <button type="submit" class="btn btn-primary waves-effect waves-light">
	                                    <i class="la la-check"></i> Actualizar
	                                </button>
	                            </div>
	                        </form>

	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
@endsection
@extends('layouts.app')
@section('header_content')
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">            
        <strong>
            Clientes
        </strong>
    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('get.client') }}" style="color:black;">
                        Lista de Clientes
                    </a>
                </li>
                <li class="breadcrumb-item">
                    Nuevo Cliente
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
	                        <form class="form form-horizontal row-separator" action="{{ route('store.client') }}" method="POST">
	                        	@csrf
	                            <div class="form-body">

	                                <h4 class="form-section"><i class="la la-user"></i> Datos del Cliente</h4>

	                                <div class="row">
	                                    <div class="col-md-4">
	                                        <div class="form-group row mx-auto">
	                                            <label class="col-md-3 label-control text-form-aling" for="userinput1">Nombre</label>
	                                            <div class="col-md-9">
	                                                <input type="text" id="userinput1" class="form-control border-primary" placeholder="Ingresar Nombre" name="name">
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <div class="form-group row mx-auto">
	                                            <label class="col-md-3 label-control text-form-aling" for="userinput2">CI/NIT</label>
	                                            <div class="col-md-9">
	                                                <input type="text" id="userinput2" class="form-control border-primary" placeholder="Ingresar NIT" name="nit">
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <div class="form-group row mx-auto">
	                                            <label class="col-md-3 label-control text-form-aling" for="userinput2">Email</label>
	                                            <div class="col-md-9">
	                                                <input type="text" id="userinput2" class="form-control border-primary" placeholder="Ingresar Cédula de Identidad" name="ci">
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="row">
	                                    <div class="col-md-4">
	                                        <div class="form-group row mx-auto">
	                                            <label class="col-md-3 label-control text-form-aling" for="userinput1">Telefono</label>
	                                            <div class="col-md-9">
	                                                <input type="text" id="userinput1" class="form-control border-primary" placeholder="Ingresar número de Telefono" name="phone">
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-8">
	                                        <div class="form-group row mx-auto">
	                                            <label class="col-md-2 label-control text-form-aling" for="userinput2">Dirección</label>
	                                            <div class="col-md-10">
	                                                <input type="text" id="userinput2" class="form-control border-primary" placeholder="Ingresar Dirección" name="address">
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="form-actions text-right">
	                                <a href="{{ route('get.client') }}">
	                                	<button type="button" class="btn btn-info mr-1 waves-effect waves-light">
		                                    <i class="la la-remove"></i> Cancelar
		                                </button>
	                                </a>
	                                <button type="submit" class="btn btn-primary waves-effect waves-light">
	                                    <i class="la la-check"></i> Guardar
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
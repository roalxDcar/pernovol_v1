@extends('layouts.app')
@section('header_content')
<div class="row">

    <div class="content-header-left col-md-9 col-12 mb-2">
        <h3 class="content-header-title white">            
        	<strong>
                Categorias
            </strong>
        </h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{ route('get.category') }}">
                            Lista de Categorias
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                   		<a href="#">
                   			Editar Categoria
                   		</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
  	<div class="content-header-right col-md-3 col-12">
        <div aria-label="Button group with nested dropdown" class="btn-group float-md-right" role="group">
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
	                        <form class="form form-horizontal row-separator" action="{{ route('update.category',$category->category_cat) }}" method="POST">
	                        	@csrf
	                        	@method('PUT')
	                            <div class="form-body">

	                                <h4 class="form-section"><i class="la la-user"></i> Datos de la Categoria</h4>

	                                <div class="row">
	                                    <div class="col-md-12">
	                                        <div class="form-group row mx-auto">
	                                            <label class="col-md-2 label-control text-form-aling" for="userinput1">Descripción : </label>
	                                            <div class="col-md-10">
	                                                <input type="text" id="userinput1" class="form-control border-primary" placeholder="Ingresar Descripción" name="name_cat" value="{{ $category->name_cat }}">
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="form-actions text-right">
	                                <a href="{{ route('get.category') }}">
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
@extends('layouts.app')
@section('header_content')

<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">            
        <strong>
            Reporte Ventas
        </strong>
    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('get.product') }}" style="color:black;">
                        Lista de ventas
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
                                <h3 class="form-group col-md-2" style="float: left; padding-top: 25px;"><b>Ventas</b></h3>
                                <form action="{{ route('sale.report') }}" method="POST">
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

@endsection
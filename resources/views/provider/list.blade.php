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
            </ol>
        </div>
    </div>
</div>
<div class="content-header-right col-md-6 col-12">
    <div class="btn-group float-md-right">
        <a href="{{ route('create.provider') }}">
            <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary round dropdown-menu-right px-2" style="margin-top: 5px;" type="button">
                Nuevo Proveedor
            </button>
        </a>
    </div>
</div>

@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content collpase show">
                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                        <div style="margin: 10px 20px 20px 20px;">
                            <div class="dataTables_wrapper dt-bootstrap4" id="DataTables_Table_0_wrapper">
                                <div class="row">
                                        <table aria-describedby="DataTables_Table_0_info" class="table table-striped table-bordered sourced-data dataTable" id="provider_table" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th aria-controls="DataTables_Table_0" aria-label="Name: activate to sort column descending" aria-sort="ascending" class="sorting_asc" colspan="1" rowspan="1" style="width: 50px;" tabindex="0">
                                                        ID
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Position: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 150px;" tabindex="0">
                                                        Compañia
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Office: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 103px;" tabindex="0">
                                                        NIT
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Age: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 150px;" tabindex="0">
                                                        Encargado
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Start date: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 100px;" tabindex="0">
                                                        Telefono
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Salary: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 96px;" tabindex="0">
                                                        Estado
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Salary: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 126px;" tabindex="0">
                                                        Acciones
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($providers as $provider)
                                                <tr class="odd" role="row">
                                                    <td>
                                                        {{ $provider->provider_prov }}
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{ $provider->company_name_prov }}
                                                    </td>
                                                    <td>
                                                        {{ $provider->nit_prov }}
                                                    </td>
                                                    <td>
                                                        {{ $provider->name_manager_prov }}
                                                    </td>
                                                    <td>
                                                        {{ $provider->phone_prov }}
                                                    </td>
                                                    <td class="text-center">
                                                        <button class="btn mr-1 btn-{{ $provider->state_prov?'success':'danger' }} btn-sm waves-effect waves-light" type="text">
                                                            {{ $provider->state_prov?'Activo':'Inactivo' }}
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('edit.provider',$provider->provider_prov) }}">
                                                            <button class="btn btn-icon btn-info waves-effect waves-light" type="button">
                                                                <i class="la la-pencil">
                                                                </i>
                                                            </button>
                                                        </a>
                                                        <a href="{{ route('state.provider',$provider->provider_prov) }}">
                                                            <button class="btn btn-icon btn-{{ $provider->state_prov?'danger':'success' }} waves-effect waves-light" type="button">
                                                                <i class="la la-{{ $provider->state_prov?'times':'check' }}">
                                                                </i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade text-left" id="idProvider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary whiter">
                <h3 class="modal-title" id="myModalLabel35" style="color:white;"><strong> NUEVO PROVEEDOR</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                	<h5><strong>  * Datos del Proveedor</strong></h5>

                    	<fieldset class="floating-label-form-group col-md-6" style="clear: left;">
	                        <label for="nit">NIT</label>
	                        <input type="password" class="form-control" id="nit" placeholder="Password">
	                    </fieldset>
	                    <fieldset class="form-group floating-label-form-group col-md-6" style="clear:right;">
	                        <label for="nit2">NIT</label>
	                        <input type="password" class="form-control" id="nit2" placeholder="Password">
	                    </fieldset>
	                    <fieldset class="form-group floating-label-form-group">
	                        <label for="dir">Dirección</label>
	                        <input type="password" class="form-control" id="dir" placeholder="Password">
	                    </fieldset>

                    	<h5 class="col-md-12"><strong>  * Datos del Contacto</strong></h5>
	                    <fieldset class="form-group floating-label-form-group col-md-12">
	                        <label for="enc">Encargado</label>
	                        <input type="text" class="form-control" id="enc" placeholder="Email Address">
	                    </fieldset>
	                    <fieldset class="form-group floating-label-form-group">
	                        <label for="email">Email</label>
	                        <input type="text" class="form-control" id="email" placeholder="Email Address">
	                    </fieldset>
	                    <fieldset class="form-group floating-label-form-group">
	                        <label for="email2">Email</label>
	                        <input type="text" class="form-control" id="email2" placeholder="Email Address">
	                    </fieldset>
                    <br>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                    <input type="submit" class="btn btn-outline-primary btn-lg" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
    {{-- DataTable Products --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#provider_table').DataTable({
            "scrollX": false,
            "language": {
                "lengthMenu":  "Mostrar "+
                            `
                            <select class="">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            `
                            +" registros por pagina",
                "zeroRecords": "No existen registros",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search": "Buscar :",
                "paginate":{
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    </script>
@endsection
@extends('layouts.app')
@section('header_content')
<div class="row">
    @if(session('status'))
        <script>
            Swal.fire(
                'Mensaje!',
                `{{ session('status') }}`,
                'success'
            )
        </script>
    @endif
    <div class="content-header-left col-md-9 col-12 mb-2">
        <h3 class="content-header-title white">
            <strong>
                Unidades
            </strong>
        </h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('get.unit') }}">
                            Lista de Unidades
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-header-right col-md-3 col-12">
        <div aria-label="Button group with nested dropdown" class="btn-group float-md-right" role="group">
        	<a href="#">
        		<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary round dropdown-menu-right px-2" style="margin-top: 5px;" type="button" id="newUnit">
	                Nueva Unidad
	            </button>
        	</a>
        </div>
    </div>
</div>
@endsection
@section('content')
<section id="html">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content collpase show">
                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                        <div style="margin: 0px 20px 20px 20px;">
                            <div class="dataTables_wrapper dt-bootstrap4" id="DataTables_Table_0_wrapper">
                                <div class="row">
                                    <table aria-describedby="DataTables_Table_0_info" class="table table-striped sourced-data dataTable" id="units_table" role="grid">
                                        <thead>
                                            <tr role="row">
                                                <th aria-controls="DataTables_Table_0" aria-label="Name: activate to sort column descending" aria-sort="ascending" class="sorting_asc" colspan="1" rowspan="1" style="width: 50px;" tabindex="0">
                                                    ID
                                                </th>
                                                <th aria-controls="DataTables_Table_0" aria-label="Position: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 200px;" tabindex="0">
                                                    Unidad
                                                </th>
                                                <th aria-controls="DataTables_Table_0" aria-label="Position: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 200px;" tabindex="0">
                                                    Prefijo
                                                </th>
                                                <th aria-controls="DataTables_Table_0" aria-label="Salary: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 96px;" tabindex="0">
                                                    Estado
                                                </th>
                                                <th aria-controls="DataTables_Table_0" aria-label="Salary: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 56px;" tabindex="0">
                                                    Acciones
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($units as $unit)
                                            <tr class="odd" role="row">
                                                <td>
                                                    {{ $unit->unit_uni }}
                                                </td>
                                                <td class="sorting_1">
                                                    {{ $unit->name_uni }}
                                                </td>
                                                <td class="sorting_1">
                                                    {{ $unit->prefix_uni }}
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn mr-1 btn-{{ $unit->state_uni?'success':'danger' }} btn-sm waves-effect waves-light" type="text">
                                                        {{ $unit->state_uni?'Activo':'Inactivo' }}
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-info waves-effect waves-light updateUnit" type="button" data-id="{{ $unit->unit_uni }}" data-name="{{ $unit->name_uni }}" data-prefix="{{ $unit->prefix_uni }}">
                                                        <i class="la la-pencil">
                                                        </i>
                                                    </button>
                                                    <button class="btn btn-icon btn-{{ $unit->state_uni?'danger':'success' }} waves-effect waves-light btn-unit-state" data-state="{{ $unit->state_uni }}" data-id="{{ $unit->unit_uni }}" type="button">
                                                        <i class="la la-{{ $unit->state_uni?'times':'check' }}">
                                                        </i>
                                                    </button>
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

@section('js')
    {{-- DataTable Products --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#units_table').DataTable({
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

@include('unit.new')
@include('unit.edit')

<script>
        // Función para cambiar de estado del producto
    $('.btn-unit-state').on('click', function(event){
        let state = $(this).data('state');
        let unit_id = $(this).data('id');
        Swal.fire({
            title: state?"¿Desea Activar Unidad?":"¿Desea Deactivar Unidad?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#673ab7',
            cancelButtonColor: '#607d8b',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = `{{ url('unidad/cambiar-estado') }}/`+unit_id;
            }
        })
    });

    //Preparación de Modal para crear Unidad
    $('.updateUnit').on('click', function(){
        let id = $(this).data('id');
        let name = $(this).data('name');
        let prefix = $(this).data('prefix');
        $('.form-edit').attr('action',"{{ url('editar-unidad/actualizar') }}/"+id);
        $('.uni_edit').val(name);
        $('.prefix_edit').val(prefix);
        $('#small_edit').modal('show');
    });

    //Preparación de Modal para crear Unidad
    $('#newUnit').on('click', function(){
        $('#small').modal('show');
    });
</script>
@endsection

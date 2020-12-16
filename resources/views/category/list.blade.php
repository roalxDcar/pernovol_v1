@extends('layouts.app')
@section('header_content')

    @if(session('status'))
        <script>
            Swal.fire(
                'Mensaje!',
                `{{ session('status') }}`,
                'success'
            )
        </script>
    @endif

<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">            
        <strong>
           CATEGORÍAS
        </strong>
    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('get.category') }}" style="color:black;">
                        LISTA DE CATEGORÍAS
                    </a>
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="content-header-right col-md-6 col-12">
    <div class="btn-group float-md-right">
        <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary round dropdown-menu-right px-2" style="margin-top: 5px;" type="button" id="newCategory">
            Nueva Categoria
        </button>
    </div>
</div>

@endsection
@section('content')
<section id="html">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    {{-- contenido de header --}}
                </div>
                <div class="card-content collpase show">
                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                        <div style="margin: 0px 20px 20px 20px;">
                            <div class="dataTables_wrapper dt-bootstrap4" id="DataTables_Table_0_wrapper">
                                <div class="row">
                                    <table aria-describedby="DataTables_Table_0_info" class="table table-striped sourced-data dataTable" id="brands_table" role="grid">
                                        <thead>
                                            <tr role="row">
                                                <th aria-controls="DataTables_Table_0" aria-label="Name: activate to sort column descending" aria-sort="ascending" class="sorting_asc" colspan="1" rowspan="1" style="width: 50px;" tabindex="0">
                                                    ID
                                                </th>
                                                <th aria-controls="DataTables_Table_0" aria-label="Position: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 450px;" tabindex="0">
                                                    DESCRIPCIÓN
                                                </th>
                                                <th aria-controls="DataTables_Table_0" aria-label="Salary: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 96px;" tabindex="0">
                                                    ESTADO
                                                </th>
                                                <th aria-controls="DataTables_Table_0" aria-label="Salary: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 126px;" tabindex="0">
                                                  <center>  ACCIONES</center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $category)
                                            <tr class="odd" role="row">
                                                <td>
                                                    {{ $category->category_cat }}
                                                </td>
                                                <td class="sorting_1">
                                                    {{ $category->name_cat }}
                                                </td>
                                                <td>
                                                    <button class="btn mr-1 btn-{{ $category->state_cat?'success':'danger' }} btn-sm waves-effect waves-light" type="text">
                                                        {{ $category->state_cat?'Activo':'Inactivo' }}
                                                    </button>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-icon btn-info waves-effect waves-light updateCategory" type="button" data-id="{{ $category->category_cat }}" data-description="{{ $category->name_cat }}">
                                                        <i class="la la-pencil">
                                                        </i>
                                                    </button>

                                                    <button class="btn btn-icon btn-{{ $category->state_cat?'danger':'success' }} waves-effect waves-light btn-category-state" data-state="{{ $category->state_cat }}" data-id="{{ $category->category_cat }}"  type="button">
                                                        <i class="la la-{{ $category->state_cat?'times':'check' }}">
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

@include('category.new')
@include('category.edit')

@endsection

@section('js')
{{-- DataTable Products --}}
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
<script>
    $('#category_table').DataTable({
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

<script>
        // Función para cambiar de estado del categoria
    $('.btn-category-state').on('click', function(event){
        let state = $(this).data('state');
        let brand_id = $(this).data('id');
        Swal.fire({
            title: state?"¿Desea Desactivar Categoria?":"¿Desea Activar Categoria?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#673ab7',
            cancelButtonColor: '#607d8b',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = `{{ url('categoria/cambiar-estado') }}/`+brand_id;
            }
        })
    });

    //Preparación de Modal para crear Categoria
    $('.updateCategory').on('click', function(){
        let id = $(this).data('id');
        let description = $(this).data('description');
        $('.form-edit').attr('action',"{{ url('editar-categoria/actualizar/') }}/"+id);
        $('.desc_edit').val(description);
        $('#small_edit').modal('show');
    });

    //Preparación de Modal para crear Categoria
    $('#newCategory').on('click', function(){
        $('#small').modal('show');
    });
</script>
@endsection


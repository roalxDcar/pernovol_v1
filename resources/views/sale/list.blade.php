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
            Ventas
        </strong>
    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('get.sale') }}" style="color:black;">
                        Lista de Ventas
                    </a>
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="content-header-right col-md-6 col-12">
    <div class="btn-group float-md-right">
        <a href="{{ route('create.sale') }}">
            <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary round dropdown-menu-right px-2" style="margin-top: 5px;" type="button" id="newBrand">
                Nueva Venta
            </button>
        </a>
    </div>
</div>


@endsection
@section('content')

<section id="html">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content collpase show">
                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                        <div style="margin: 10px 20px 20px 20px;">
                            <div class="dataTables_wrapper dt-bootstrap4" id="DataTables_Table_0_wrapper">
                                <div class="row">
                                    <table class="table table-striped sourced-data dataTable" id="branches_table" role="grid">
                                        <thead>
                                            <tr role="row">
                                                <th style="width: 20px;">
                                                    ID
                                                </th>
                                                <th style="width: 80px;">
                                                    Vendedor
                                                </th>
                                                <th style="width: 100px;">
                                                    Cliente
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
                                                <th style="width: 56px;" class="text-center">
                                                    Acciones
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($sales as $sale)
                                            <tr class="odd" role="row">
                                                
                                                <td>
                                                    {{ $sale->sale_sal }}
                                                </td>
                                                
                                                <td>
                                                    {{ $sale->user->name }} {{ $sale->user->paternal }} {{ $sale->user->maternal }}
                                                </td>

                                                <td>
                                                    {{ $sale->client->name_cli }}
                                                </td>

                                                <td class="sorting_1">
                                                    {{ $sale->type_sal==1?"Factura":"Recibo" }}
                                                </td>

                                                <td class="sorting_1">
                                                    {{ $sale->invoice_number_sal }}
                                                </td>

                                                <td class="sorting_1">
                                                    {{ $sale->purchase_date_sal }}
                                                </td>

                                                <td class="sorting_1">
                                                    {{ $sale->total_sal }}
                                                </td>
                                                <td class="text-center">
                                                    <a href="generar-pdf/{{ $sale->sale_sal }}">
                                                        <button class="btn btn-danger waves-effect waves-light" type="button">
                                                            <i class="la la-file-pdf-o">
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

@section('js')
    {{-- DataTable Products --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#branches_table').DataTable({
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
                "infoEmpty": "No hay registros disponibles",
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

<script>
        // Función para cambiar de estado del producto
    $('.btn-branch-state').on('click', function(event){
        let state = $(this).data('state');
        let branch_id = $(this).data('id');
        Swal.fire({
            title: state?"¿Desea Desactivar Sucursal?":"¿Desea Activar Sucursal?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#673ab7',
            cancelButtonColor: '#607d8b',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = `{{ url('sucursal/cambiar-estado') }}/`+branch_id;
            }
        })
    });
</script>
@endsection

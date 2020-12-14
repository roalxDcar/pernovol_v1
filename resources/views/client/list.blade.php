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
            </ol>
        </div>
    </div>
</div>
<div class="content-header-right col-md-6 col-12">
    <div class="btn-group float-md-right">
        <a href="{{ route('create.client') }}">
            <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary round dropdown-menu-right px-2" style="margin-top: 5px;" type="button">
                Nuevo Cliente
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
                                    <table class="table table-striped sourced-data dataTable" id="client_table" role="grid">
                                        <thead>
                                                <tr role="row">
                                                    <th aria-controls="DataTables_Table_0" aria-label="Name: activate to sort column descending" aria-sort="ascending" class="sorting_asc" colspan="1" rowspan="1" style="width: 50px;" tabindex="0">
                                                        ID
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Position: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 150px;" tabindex="0">
                                                        Nombre
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Office: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 103px;" tabindex="0">
                                                        CI/NIT
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Age: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 100px;" tabindex="0">
                                                        Email
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Start date: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 100px;" tabindex="0">
                                                        Telefono
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Start date: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 200px;" tabindex="0">
                                                        Dirección
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Salary: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 93px;" tabindex="0">
                                                        Estado
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Salary: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 150px;" tabindex="0">
                                                        Acciones
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($clients as $client)
                                                <tr class="odd" role="row">
                                                    <td>
                                                        {{ $client->client_cli }}
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{ $client->name_cli }}
                                                    </td>
                                                    <td>
                                                        {{ $client->ci_nit_cli }}
                                                    </td>
                                                    <td>
                                                        {{ $client->email_cli }}
                                                    </td>
                                                    <td>
                                                        {{ $client->phone_cli }}
                                                    </td>
                                                    <td>
                                                        {{ $client->address_cli }}
                                                    </td>
                                                    <td class="text-center">
                                                        <button class="btn mr-1 btn-{{ $client->state_cli?'success':'danger' }} btn-sm waves-effect waves-light" type="text">
                                                            {{ $client->state_cli?'Activo':'Inactivo' }}
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('edit.client',$client->client_cli) }}">
                                                            <button class="btn btn-icon btn-info waves-effect waves-light" type="button">
                                                                <i class="la la-pencil">
                                                                </i>
                                                            </button>
                                                        </a>
                                                        <a href="{{ route('state.client',$client->client_cli) }}">
                                                            <button class="btn btn-icon btn-{{ $client->state_cli?'danger':'success' }} waves-effect waves-light" type="button">
                                                                <i class="la la-{{ $client->state_cli?'times':'check' }}">
                                                                </i>
                                                            </button>
                                                        </a>
                                                        </form>
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
@endsection
@section('js')
    {{-- DataTable Products --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#client_table').DataTable({
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
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
            Usuarios
        </strong>
    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('get.user') }}" style="color:black;">
                        Lista de Usuarios
                    </a>
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="content-header-right col-md-6 col-12">
    <div class="btn-group float-md-right">
        <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary round dropdown-menu-right px-2" id="new_User" style="margin-top: 5px;" type="button">
            Nuevo Usuario
        </button>
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
                                    <table class="table table-striped sourced-data dataTable" id="user_table" role="grid">
                                        <thead>
                                                <tr role="row">
                                                    <th aria-controls="DataTables_Table_0" aria-label="Name: activate to sort column descending" aria-sort="ascending" class="sorting_asc" colspan="1" rowspan="1" style="width: 50px;" tabindex="0">
                                                        ID
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Position: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 250px;" tabindex="0">
                                                        Usuario
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Office: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 50px;" tabindex="0">
                                                        CI
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Age: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 100px;" tabindex="0">
                                                        Email
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Start date: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 50px;" tabindex="0">
                                                        Telefono
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Salary: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 50px;" tabindex="0">
                                                        Estado
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Salary: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 100px;" tabindex="0">
                                                        Acciones
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                <tr class="odd" role="row">
                                                    <td>
                                                        {{ $user->id }}
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{ $user->name }} {{ $user->paternal }} {{ $user->maternal }}
                                                    </td>
                                                    <td>
                                                        {{ $user->ci }}
                                                    </td>
                                                    <td>
                                                        {{ $user->email }}
                                                    </td>
                                                    <td>
                                                        {{ $user->phone }}
                                                    </td>
                                                    <td class="text-center">
                                                        <button class="btn mr-1 btn-{{ $user->state?'success':'danger' }} btn-sm waves-effect waves-light" type="text">
                                                            {{ $user->state?'Activo':'Inactivo' }}
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-icon btn-info waves-effect waves-light edit_User" type="button" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-paternal="{{ $user->paternal }}" data-maternal="{{ $user->maternal }}" data-ci="{{ $user->ci }}" data-email="{{ $user->email }}" data-phone="{{ $user->phone }}" data-address="{{ $user->address }}">
                                                            <i class="la la-pencil">
                                                            </i>
                                                        </button>
                                                        <a href="{{ route('state.user',$user->id) }}">
                                                            <button class="btn btn-icon btn-{{ $user->state?'danger':'success' }} waves-effect waves-light" type="button">
                                                                <i class="la la-{{ $user->state?'times':'check' }}">
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

@include('user.new')
@include('user.edit')

@endsection
@section('js')
    {{-- DataTable Products --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#user_table').DataTable({
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
    	$('#new_User').on('click', function(){
    		$('#NewUser').modal('show');
			$("#form_user")[0].reset();
    	});
    	$('.edit_User').on('click', function(){
    		let id = $(this).data('id');
        	$('#form_user_edit').attr('action',"{{ url('editar-usuario/actualizar') }}/"+id);
    		$('#name_edit').val($(this).data('name'));
    		$('#paternal_edit').val($(this).data('paternal'));
    		$('#maternal_edit').val($(this).data('maternal'));
    		$('#ci_edit').val($(this).data('ci'));
    		$('#email_edit').val($(this).data('email'));
    		$('#phone_edit').val($(this).data('phone'));
    		$('#address_edit').val($(this).data('address'));
    		$('#EditUser').modal('show');
    	});
    </script>
@endsection
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
            Productos
        </strong>
    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('get.product') }}" style="color:black;">
                        Lista de Productos
                    </a>
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="content-header-right col-md-6 col-12">
    <div class="btn-group float-md-right">
        <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary round dropdown-menu-right px-2" style="margin-top: 5px;" type="button" data-toggle="modal" data-target="#large">
            Nuevo Producto
        </button>
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
                            <div class="col-12">
                                <h3><b>Reporte de Productos</b></h3>
                                <div class="form-group">
                                    <a href="{{ route('print.product') }}">
                                        <button type="button" class="btn btn-danger btn-block mr-1 mb-1">Generar PDF</button>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="html">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content collpase show">
                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap" style="padding:20px;">
                        <div style="margin: 0px 20px 20px 20px;">
                            <div class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <table class="table table-striped" id="products_table">
                                            <thead>
                                                <tr role="row">
                                                    <th colspan="1" rowspan="1" style="width: 200px;">
                                                        COD
                                                    </th>
                                                    <th colspan="1" rowspan="1" style="width: 300px;">
                                                        Producto
                                                    </th>
                                                    <th colspan="1" rowspan="1" style="width: 300px;">
                                                        Categoria
                                                    </th>
                                                    <th colspan="1" rowspan="1" style="width: 300px;" class="text-center">
                                                        Cantidad
                                                    </th>
                                                    <th colspan="1" rowspan="1" style="width: 120px;">
                                                        Expiración
                                                    </th>
                                                    <th colspan="1" rowspan="1" style="width: 120px;" class="text-center">
                                                        Imagen
                                                    </th>
                                                    <th colspan="1" rowspan="1" style="width: 80px;" class="text-center">
                                                        Estado
                                                    </th>
                                                    <th colspan="1" rowspan="1" style="width: 200px;" class="text-center">
                                                        Acciones
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($products as $product)
                                                <tr class="odd" role="row">
                                                    <td>
                                                        {{ $product->code_prod }}
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{ $product->name_prod }}
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{ $product->category->name_cat }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $product->stock_prod }}
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{ $product->expiration_prod }}
                                                    </td>
                                                    <td class="text-center">
                                                        <img height="80" src="{!!asset('assets/product')!!}/{{ $product->photo_prod }}" alt="">
                                                    </td>
                                                    <td class="text-center">
                                                        <button class="btn mr-1 btn-{{ $product->state_prod?'success':'danger' }} btn-sm waves-effect waves-light" type="text">
                                                            {{ $product->state_prod?'Activo':'Inactivo' }}
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-md btn-info waves-effect waves-light updateProduct" type="button" data-id="{{ $product->product_prod }}">
                                                            <i class="la la-pencil">
                                                            </i>
                                                        </button>
                                                        <button class="btn btn-icon btn-{{ $product->state_prod?'danger':'success' }} waves-effect waves-light btn-product-state" data-state="{{ $product->state_prod }}" data-id="{{ $product->product_prod }}" type="button">
                                                            <i class="la la-{{ $product->state_prod?'times':'check' }}">
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
    </div>
</section>

@include('product.new')
@include('product.edit')

@section('js')
    {{-- DataTable Products --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#products_table').DataTable({
            responsive: true,
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

<script type="text/javascript">

    // Función para cambiar de estado del producto
    $('.btn-product-state').on('click', function(event){
        let state = $(this).data('state');
        let prod_id = $(this).data('id');
        Swal.fire({
            title: state?"¿Desea Desactivar Producto?":"¿Desea Activar Producto?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#673ab7',
            cancelButtonColor: '#607d8b',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = `{{ url('producto/cambiar-estado') }}/`+prod_id;
            }
        })
    });

    // Datos de Fecha de Vencimiento 
    $('#exp').on('change', function(){
        if($('input:checkbox[name=exp]:checked').val()){
           $('#exp_check').html(`<fieldset class="form-group" readonly="readonly">
                        <label for="expiration">
                            Fecha de Expiración
                        </label>
                        <input type="date" class="form-control" id="expiration" name="expiration" value="{{ date('Y-m-d') }}">
                    </fieldset>`); 
        }else{
            $('#exp_check').html('')
        }

    });

    
    // Función para mostrar el formulario de registro de Producto

    $('#newProductBtn').on('click', function(){
        $('#formProduct').attr('action',"{{ route('store.product') }}");
        $('#titleProduct').html('NUEVO PRODUCTO');
        $('#csrf_prod').html("");
        $('#code').val("");
        $('#name').val("");
        $("#category option:selected").removeAttr("selected", false);

        if($('#exp').is(':checked')){
            $('#exp').trigger('click')
            $('#expiration').val(`{{ date('Y-m-d') }}`);
        } 
        $('#photo').val("");
        $('#photo_label_p').html("Seleccione Imagen");
        $('#btn-submit').html('Guardar');
        $('#newProduct').modal('show');    
    });
</script>
@endsection
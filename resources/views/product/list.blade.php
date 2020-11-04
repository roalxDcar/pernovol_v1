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
<div class="row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <h3 class="content-header-title white">
            <strong>
                Productos
            </strong>
        </h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('get.product') }}">
                            Lista de Productos
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-header-right col-md-3 col-12">
        <div aria-label="Button group with nested dropdown" class="btn-group float-md-right" role="group">
            <a href="#">
                <button type="button" class="btn btn-primary round dropdown-menu-right px-2" style="margin-top: 5px;" id="newProductBtn">
                    Nuevo Producto
                </button>
            </a>
        </div>
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
                        <div class="table-responsive">
                            <div class="dataTables_wrapper dt-bootstrap4" id="DataTables_Table_0_wrapper">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        {{-- Contenido list --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table aria-describedby="DataTables_Table_0_info" class="table table-striped table-bordered sourced-data dataTable" id="DataTables_Table_0" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th aria-controls="DataTables_Table_0" aria-label="Name: activate to sort column descending" aria-sort="ascending" class="sorting_asc" colspan="1" rowspan="1" style="width: 200px;" tabindex="0">
                                                        COD
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Position: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 400px;" tabindex="0">
                                                        Producto
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Position: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 300px;" tabindex="0">
                                                        Categoria
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Position: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 150px;" tabindex="0">
                                                        Expiración
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Salary: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 96px;" tabindex="0">
                                                        Estado
                                                    </th>
                                                    <th aria-controls="DataTables_Table_0" aria-label="Salary: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 180px;" tabindex="0">
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
                                                    <td class="sorting_1">
                                                        {{ $product->expiration_prod }}
                                                    </td>
                                                    <td class="text-center">
                                                        <button class="btn mr-1 btn-{{ $product->state_prod?'success':'danger' }} btn-sm waves-effect waves-light" type="text">
                                                            {{ $product->state_prod?'Activo':'Inactivo' }}
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-icon btn-info waves-effect waves-light updateProduct" type="button" data-id="{{ $product->product_prod }}">
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
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div aria-live="polite" class="dataTables_info" id="DataTables_Table_0_info" role="status">
                                            Showing 1 to 10 of 57 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                            {{-- paginación --}}
                                        </div>
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
{{-- Inicio de modal FORM --}}
<div class="modal fade text-left" id="newProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary whiter">
                <h3 class="modal-title" id="titleProduct" style="color:white;"><strong> NUEVO PRODUCTO</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('store.product') }}" id="formProduct" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="csrf_prod"></div>
                <div class="modal-body" style="padding: 15px 25px 0px 25px;">
                    <fieldset class="form-group floating-label-form-group">
                        <label for="code">
                            Código
                        </label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Ingresar código de Producto">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="name">
                            Nombre
                        </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingresar nombre del Producto">
                    </fieldset>
                    <fieldset class="form-group position-relative">
                        <label for="category">
                            Categoria
                        </label>
                        <select class="form-control" id="category" name="category">
                            <option value="0" selected="">
                                Seleccione Categoria
                            </option>
                            @foreach($categories as $category)
                                <option value="{{ $category->category_cat }}">
                                    {{ $category->name_cat }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>
                    <div class="form-group mt-1">
                        <label for="exp">
                            Dispone de Fecha de Expiración?   
                        </label>
                        <input type="checkbox" id="exp" name="exp" class="switchery" data-size="sm" value="1"/>
                    </div>
                    <div id="exp_check">
                    </div>
                    <fieldset class="form-group">
                        <label for="photo_prod">
                            Imagen del Producto
                        </label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="photo">
                            <label class="custom-file-label" id="photo_label" for="inputGroupFile02" aria-describedby="inputGroupFile02">
                                Seleccione Imagen
                            </label>
                        </div>
                    </fieldset>
                    <br>
                </div>
                <div class="modal-footer" style="margin: 0px 20px 10px 20px;">
                    <button type="reset" class="btn btn-secondary btn-lg" data-dismiss="modal" style="color: white;">    Cancelar 
                    </button>
                    <button type="submit" class="btn btn-primary btn-lg" id="btn-submit" style="color: white;"> 
                        Guardar 
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Fin de Modal FORM --}}

<script type="text/javascript">
    {{-- Función para recuperar datos del producto seleccionado --}}
    $('.updateProduct').on('click', function(){
        let product_cod = $(this).data('id');
        $.ajax({
            url:     `editar-producto/${product_cod}`,
            headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
            method:  "GET",
            success: function(data){
                $('#formProduct').attr('action',"{{ url('/editar-producto/actualizar') }}/"+product_cod);
                $('#titleProduct').html('ACTUALIZAR PRODUCTO');
                $('#csrf_prod').html('@method('PUT')');
                $('#code').val(data.product.code_prod);
                $('#name').val(data.product.name_prod);
                $("#category option:selected").removeAttr("selected", false);
                $(`#category option[value='${data.product.category_prod}']`).attr("selected", true);
                if(data.product.exp_prod == 1){
                    if($('#exp').is(':checked') === false){
                        $('#exp').trigger('click');
                    }
                }else{
                    if($('#exp').is(':checked') === true){
                        $('#exp').trigger('click');
                    }
                } 

                $('#expiration').val(data.product.expiration_prod);
                $('#photo').val(data.product.photo_prod);
                $('#photo_label').html(data.product.photo_prod);
                $('#btn-submit').html('Actualizar');
                $('#newProduct').modal('show');
            }
        });
    })
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
        $('#photo_label').html("Seleccione Imagen");
        $('#btn-submit').html('Guardar');
        $('#newProduct').modal('show');    
    });
    // Función para cambiar de estado
    $('.btn-product-state').on('click', function(event){
        let state = $(this).data('state');
        let prod_id = $(this).data('id');
        Swal.fire({
            title: state?"¿Desea Activar Producto?":"¿Desea Deactivar Producto?",
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
</script>
@endsection
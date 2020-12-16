@extends('layouts.app')
@section('header_content')
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">            
        <strong>
            Compras
        </strong>
    </h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('get.purchase') }}" style="color:black;">
                        Lista de Compras
                    </a>
                </li>
                <li class="breadcrumb-item">
                    Nueva Compra
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('content')
	<section id="row-separator-form-layouts">
        <form action="{{ route('store.purchase') }}" method="POST">
    	@csrf
		    <div class="row">
		        <div class="col-md-8" style="float: left;">
		            <div class="card">
		                <div class="card-content collapse show">
		                	<div class="card-header bg-primary">
		                		<div class="row">
                                	<div class="col-md-12" style="padding-left: 0px;">
	                                	<div class="col-md-4" style="float: left; padding-top: 10px;">
	                                		<h4 style="color: white;"><b><span class="material-icons">
                                			shopping_cart
                                		</span> Detalle de Compra</b></h4>
	                                	</div>
		                                <div style="float: right;">
		                                	<a href="#">
								        		<button aria-expanded="false" aria-haspopup="true" class="btn btn-success round dropdown-menu-right px-2" style="margin-top: 5px;" type="button" id="newProduct">
									                <b><i class="la la-plus"></i> Nuevo Producto</b>
									            </button>
								        	</a>
		                                </div>
	                                </div>
                                </div>
		                	</div>
		                    <div class="card-body" style="padding:20px;">
	                            <div class="form-body">
	                                <div class="row">
	                                    <div class="col-md-12">
	                                        <div class="input-group">
	                                        	<label style="color: black;"><b>Productos: </b></label>
	                                            <select class="form-control ml-2" id="product_select">
						                            <option value="0" selected="">
						                                Seleccione Producto
						                            </option>
						                            @foreach($products as $product)
						                                <option value="{{ $product->product_prod }}">
						                                    {{ $product->name_prod }}
						                                </option>
						                            @endforeach
						                        </select>
						                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-info  px-2" type="button" id="push">
									                <b>Agregar</b>
									            </button>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div><br>
                            	<table class="table table-striped table-responsive">
	                                <thead class="bg-secondary" style="color: white;">
	                                    <tr role="row">
	                                        <th style="width: 50px;">
	                                            ID-PRO
	                                        </th>
	                                        <th style="width: 200px;">
	                                            Producto
	                                        </th>
	                                        <th style="width: 100px;">
	                                            Cantidad
	                                        </th>
	                                        <th style="width: 100px;">
	                                            Precio Unitario
	                                        </th>
	                                        <th style="width: 10px;">
	                                        	Sub-Total
	                                        </th>
	                                        <th style="width: 50px;">
	                                            Acciones
	                                        </th>
	                                    </tr>
	                                </thead>
	                                <tbody id="body_table">
	                                    <tr>
	                                        <td>
	                                        </td>
	                                        <td>
	                                        </td>
	                                        <td>
	                                        </td>
	                                        <td style="font-weight: bold;">
	                                            SUMAS 
	                                        </td>
	                                        <td class="suma">
	                                            0
	                                        </td>
	                                        <td>
	                                        </td>
	                                    </tr>
                                     	<tr>
	                                        <td>
	                                        </td>
	                                        <td>
	                                        </td>
	                                        <td>
	                                        </td>
	                                        <td>
	                                            <b>IVA %</b> 
	                                        </td>
	                                        <td class="iva">
	                                            13
	                                        </td>
	                                        <td>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td>
	                                        </td>
	                                        <td>
	                                        </td>
	                                        <td>

	                                        <td>
	                                            <b>DESCUENTO</b> 
	                                        </td>
	                                        <td class="total_val">
	                                        	<input type="number" class="form-control" value="0" id="discount" name="discount">
	                                        </td>
	                                        <td>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td>
	                                        </td>
	                                        <td>
	                                        </td>
	                                        <td>

	                                        <td>
	                                            <b>TOTAL</b> 
	                                        </td>
	                                        <td class="total_val">
	                                        	<input readonly="readonly" type="number" class="form-control" value="0" id="total_purchase" name="total_purchase">
	                                        </td>
	                                        <td>
	                                        </td>
	                                    </tr>
	                                </tbody>
	                            </table>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="col-md-4" style="float: right;">
		        	<div class="card">
		                <div class="card-content collapse show">
		                	<div class="card-header bg-primary text-center">
		                		<h3 style="color: white;"><b class="title-total">Total: 0 Bs</b></h3>
		                	</div>
		                    <div class="card-body">
		                        <div class="form-body">
		                            <div class="row">
		                                <div class="col-md-12">
		                                    <fieldset>
	                                        	<label style="color: black;" class="col-md-4"><b>Proveedor: </b></label><br>
	                                            <select class="form-control" name="provider">
						                            <option value="0" selected="">
						                                Seleccione Proveedor
						                            </option>
						                            @foreach($providers as $provider)
						                                <option value="{{ $provider->provider_prov }}">
						                                    {{ $provider->company_name_prov }}
						                                </option>
						                            @endforeach
						                        </select>
		                                    </fieldset>
		                                    <br>
		                                    {{-- <fieldset>
	                                        	<label style="color: black;" class="col-md-4"><b>Sucursal: </b></label>
	                                            <select class="form-control" name="branch">
						                            <option value="0" selected="">
						                                Seleccione Sucursal
						                            </option>
						                            @foreach($branches as $branch)
						                                <option value="{{ $branch->branch_bra }}">
						                                    {{ $branch->name_bra }}
						                                </option>
						                            @endforeach
						                        </select>
		                                    </fieldset>
		                                    <br> --}}
		                                    <fieldset>
	                                        	<label style="color: black;" class="col-md-4"><b>Fecha: </b></label>
	                                        	<input type="date" class="form-control" name="date" placeholder="Fecha de Compra">
		                                    </fieldset>
		                                    <br>
	                                    	<fieldset class="col-md-6" style="float: left;">
	                                        	<label style="color: black;"><b>Tipo Comprobante: </b></label>
	                                            <select class="form-control" name="type" id="type">
						                            <option value="0" selected="">
						                                Seleccione Comprobante
						                            </option>
						                            <option value="1">
						                                Factura
						                            </option>
						                            <option value="2">
						                                Recibo
						                            </option>
						                        </select>
		                                    </fieldset>
	                                     	<fieldset class="col-md-6" style="float: left;">
	                                        	<label style="color: black;"><b>N° Factura: </b></label>
	                                        	<input type="text" class="form-control" name="invoice_number" placeholder="Ingresar N°">
		                                    </fieldset>  
		                                    
											<br>
	                                     	<fieldset class="col-md-6" style="float: left;">
	                                        	<label style="color: black;"><b>Tipo de Pago: </b></label>
	                                            <select class="form-control" name="type_purchase">
						                            <option value="0" selected="">
						                                Seleccione Pago
						                            </option>
						                            <option value="1">
						                                Credito
						                            </option>
						                            <option value="2">
						                                Contado
						                            </option>
						                        </select>
		                                    </fieldset>  
												<fieldset class="col-md-6" style="float: left;">
	                                        	<label style="color: black;"><b>Impuesto: </b></label>
	                                        	<input type="number" readonly="readonly" class="form-control impuesto" name="tribute">
		                                    </fieldset>                            
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="card-footer">
                                <button class="btn btn-primary btn-block" type="submit">
                                	<b>
                                		Guardar Compra
                                	</b>
                                </button>
		                    </div>
		                </div>
		            </div>
		        </div>
	        </div>
        </form>
	</section>
@endsection
@section('js')
<script>

// Agregar un producto a carrito
$('#push').on('click', function(){
	let val = $('#product_select').val();
	if(val != 0){
		$('#product_select option[value="'+val+'"]').remove();
	}
   	$.ajax({
        url:     "{{ url('lista-productos/venta/') }}/" + val,
        headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        method:  "GET",
        success:function(data){
        	$('#body_table').prepend(`<tr>

                <td>
                    <input readonly="readonly" type="number" class="form-control" value="${data.product_prod}" name="product_pro[]">
                </td>
                
                <td>
                    ${data.name_prod}
                </td>

                <td class="sorting_1">
                    <input type="number" class="form-control stock_prod NAN" value="1" name="quantity[]">
                </td>

                <td class="sorting_1">
                    <input type="number" class="form-control price NAN" value="${data.purchase_price_prod}" name="price[]">
                </td>

                <td class="text-center val_${data.product_prod}">
                </td>

                <td class="text-center">
                    <button class="btn btn-icon btn-danger trash-item" type="button" data-id="${data.product_prod}" data-product="${data.name_prod}">
                        <i class="la la-trash">
                        </i>
                    </button>
                </td>

            </tr>`);
            sumarTbody();
        }
    });
});

// Eliminar producto
$(document).on('click','.trash-item', function(){
	let id = $(this).data('id');
	let product = $(this).data('product');
	
	$('#product_select').append("<option value='"+id+"' >"+product+"</option>");
	// Elimina celda seleccionada
	$(this).closest('tr').remove();
	sumarTbody();
});

$(document).change(function(){
	$('.iva').html($('.impuesto').val());
	sumarTbody();
})

function sumarTbody(){
	var suma = 0;
	var total = 0;
    $("#body_table tr").each(function(ind,ele){//recorre tr's
    	var t0 = 1, sw = 0, sw1 = 0;
        $("td",ele).each(function(i,e){//recorre td's           
          if(i==2) {
          	// Valor Cantidad
          	if(Number($(e).find(".stock_prod").val())){
          		t0 = t0 * Number($(e).find(".stock_prod").val());
          	}
          	// Se verifica si existe un valor dentro del input
          	if($(e).find(".stock_prod").val()){
          		sw = 1;
          	}
          }
          if(i==3) {
          	// Valor precios
          	if(Number($(e).find(".price").val())){
          		t0 = t0 * Number($(e).find(".price").val());
          	}
          }
          if(i==4 && sw == 1) {
          	$(e).html(t0);
          	suma  += t0;

         	total += t0+(($('.impuesto').val()==13)?(t0*(0.13)):0);
          }
        });
    })
    $('.suma').html(suma.toFixed(2));

    $('#total_purchase').val(total.toFixed(2)-$('#discount').val());
    // console.log(t0,t1);//renderiza tu footer con estos valores
    $('.title-total').html("Total: "+$('#total_purchase').val()+" Bs.");
}

$(document).on('change', '#type', function(event) {
	let typ = $("#type option:selected").val();
	if(typ == 1){
		$('.impuesto').val(13);
	}else if(typ == 2){
		$('.impuesto').val(0);
	}
});

</script>		
@endsection
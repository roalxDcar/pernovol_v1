<!-- Modal New -->
<div class="modal fade text-left" id="smallCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" style="color: white;"><i class="la la-wrench"></i><b> Nuevo Cliente</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_client">
                @csrf
                <div class="modal-body" style="padding: 15px 25px 0px 25px;">
                    <fieldset class="form-group floating-label-form-group col-md-6" style="float: left;">
                        <label for="name_cli">
                            <b>Nombre:</b>
                        </label>
                        <input type="text" id="name_cli" name="name_cli" class="form-control" placeholder="Ingresar Nombre">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-6" style="float: left;">
                        <label for="ci_nit_cli">
                            <b>CI/NIT:</b>
                        </label>
                        <input type="text" id="ci_nit_cli" name="ci_nit_cli" class="form-control" placeholder="Ingresar CI/NIT">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-6" style="float: left;">
                        <label for="email_cli">
                            <b>Email:</b>
                        </label>
                        <input type="text" id="email_cli" name="email_cli" class="form-control" placeholder="Ingresar Email">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-6" style="float: left;">
                        <label for="phone_cli">
                            <b>Telefono:</b>
                        </label>
                        <input type="text" id="phone_cli" name="phone_cli" class="form-control" placeholder="Ingresar Telefono">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-12" style="float: left;">
                        <label for="address_cli">
                            <b>Dirección:</b>
                        </label>
                        <input type="text" id="address_cli" name="address_cli" class="form-control" placeholder="Ingresar Dirección">
                    </fieldset>
                </div>
                <br>

                <div class="modal-footer col-md-12">
                    <button type="reset" class="btn btn-secondary btn-md" data-dismiss="modal" style="color: white;">    
                        <i class="la la-times"></i>
                        Cancelar 
                    </button>
                    <button type="button" class="btn btn-primary btn-md" id="submitClient" style="color: white;">
                        <i class="la la-check"></i>  
                        Guardar 
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
	$('#submitClient').on('click', function(){
		$.ajax({
            url:     "{{ route('newClient.sale') }}",
            headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
            method:  "POST",
            data:{
                name 	: $('#name_cli').val(),
                ci_nit 	: $('#ci_nit_cli').val(),
                email 	: $('#email_cli').val(),
                phone 	: $('#phone_cli').val(),
                address : $('#address_cli').val()
            },
			success: function(data){
				$("#form_client")[0].reset();
				$('#client').append("<option value='"+data.client_cli+"' >"+data.name_cli+"</option>");
				$('#smallCliente').modal("hide");
		        Swal.fire(
			        'Mensaje!',
			        'Registro de cliente con exito!',
			        'success'
			    )
			}
		});
	});
</script>

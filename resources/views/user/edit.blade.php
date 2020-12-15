<!-- Modal New -->
<div class="modal fade text-left" id="EditUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" style="color: white;"><i class="la la-wrench"></i><b> Nuevo Usuario</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_user_edit" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body" style="padding: 15px 25px 0px 25px;">
                    <fieldset class="form-group floating-label-form-group col-md-6" style="float: left;">
                        <label for="name_edit">
                            <b>Nombre:</b>
                        </label>
                        <input type="text" id="name_edit" name="name_edit" class="form-control" placeholder="Ingresar Nombre">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-6" style="float: left;">
                        <label for="paternal_edit">
                            <b>Paterno:</b>
                        </label>
                        <input type="text" id="paternal_edit" name="paternal_edit" class="form-control" placeholder="Ingresar Apellido Paterno">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-6" style="float: left;">
                        <label for="maternal_edit">
                            <b>Materno:</b>
                        </label>
                        <input type="text" id="maternal_edit" name="maternal_edit" class="form-control" placeholder="Ingresar Apellido Materno">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-6" style="float: left;">
                        <label for="ci_edit">
                            <b>CI:</b>
                        </label>
                        <input type="text" id="ci_edit" name="ci_edit" class="form-control" placeholder="Ingresar CI">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-6" style="float: left;">
                        <label for="email_edit">
                            <b>Email:</b>
                        </label>
                        <input type="text" id="email_edit" name="email_edit" class="form-control" placeholder="Ingresar Email">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-6" style="float: left;">
                        <label for="phone_edit">
                            <b>Telefono:</b>
                        </label>
                        <input type="text" id="phone_edit" name="phone_edit" class="form-control" placeholder="Ingresar Telefono">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-12" style="float: left;">
                        <label for="address_edit">
                            <b>Dirección:</b>
                        </label>
                        <input type="text" id="address_edit" name="address_edit" class="form-control" placeholder="Ingresar Dirección">
                    </fieldset>
                </div>
                <br>

                <div class="modal-footer col-md-12">
                    <button type="reset" class="btn btn-secondary btn-md" data-dismiss="modal" style="color: white;">    
                        <i class="la la-times"></i>
                        Cancelar 
                    </button>
                    <button type="submit" class="btn btn-primary btn-md" style="color: white;">
                        <i class="la la-check"></i>  
                        Actualizar 
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit -->
<div class="modal fade text-left" id="small_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" style="color: white;"><i class="la la-wrench"></i><b> Editar Marca</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" class="form-edit">
                @csrf
                @method('PUT')
                <div class="modal-body" style="padding: 15px 25px 0px 25px;">
                    <fieldset class="form-group floating-label-form-group col-md-12" style="float: left;">
                        <label for="name_bra">
                            <b>Sucursal:</b>
                        </label>
                        <input type="text" id="name_bra" name="name_bra" class="form-control name_edit" placeholder="Ingresar nombre de la Sucursal">
                    </fieldset>

                    <fieldset class="form-group floating-label-form-group col-md-12" style="float: left;">
                        <label for="address_bra">
                            <b>Dirección:</b>
                        </label>
                        <input type="text" id="address_bra" name="address_bra" class="form-control address_edit" placeholder="Ingresar Dirección">
                    </fieldset>

                    <fieldset class="form-group floating-label-form-group col-md-12" style="float: left;">
                        <label for="phone_bra">
                            <b>Telefono/Celular:</b>
                        </label>
                        <input type="text" id="phone_bra" name="phone_bra" class="form-control phone_edit" placeholder="Ingresar Tel/Cel">
                    </fieldset>

                    <fieldset class="form-group floating-label-form-group col-md-12" style="float: left;">
                        <label for="nit_bra">
                            <b>NIT:</b>
                        </label>
                        <input type="text" id="nit_bra" name="nit_bra" class="form-control nit_edit" placeholder="Ingresar Tel/Cel">
                    </fieldset>
                </div>
                <br>

                <div class="modal-footer col-md-12" style="padding: 15px 35px 20px 35px;">
                    <button type="reset" class="btn btn-secondary btn-lg" data-dismiss="modal" style="color: white;">    
                        <i class="la la-times"></i>
                        Cancelar 
                    </button>
                    <button type="submit" class="btn btn-primary btn-lg" id="btn-submit" style="color: white;">
                        <i class="la la-check"></i>  
                        Actualizar 
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
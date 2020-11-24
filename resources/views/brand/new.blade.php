<!-- Modal New -->
<div class="modal fade text-left" id="small" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" style="color: white;"><i class="la la-wrench"></i><b> Nueva Marca</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('store.brand') }}" method="POST">
                @csrf
                <div class="modal-body" style="padding: 15px 25px 0px 25px;">
                    <fieldset class="form-group floating-label-form-group col-md-12" style="float: left;">
                        <label for="name_bra">
                            <b>Nombre de la Marca:</b>
                        </label>
                        <input type="text" id="name_bra" name="name_bra" class="form-control" placeholder="Ingresar Código">
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
                        Guardar 
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
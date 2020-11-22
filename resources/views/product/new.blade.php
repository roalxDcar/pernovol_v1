<!-- Modal New -->
<div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" style="color: white;"><i class="la la-wrench"></i><b> Nuevo Producto</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('store.product') }}" id="formProduct" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" style="padding: 15px 25px 0px 25px;">
                    <fieldset class="form-group floating-label-form-group col-md-4" style="float: left;">
                        <label for="code_prod">
                            <b>Código:</b>
                        </label>
                        <input type="text"  id="code_prod" name="code_prod" class="form-control" placeholder="Ingresar Código">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-8" style="float: left;">
                        <label for="name_prod">
                            <b>Producto:</b>
                        </label>
                        <input type="text" class="form-control" id="name_prod" name="name_prod" placeholder="Ingresar nombre de Producto">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-4" style="float: left;">
                        <label for="category_prod">
                            <b>Categoria:</b>
                        </label>
                        <select class="form-control" id="category_prod" name="category_prod">
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
                    <fieldset class="form-group floating-label-form-group col-md-4" style="float: left;">
                        <label for="brand_prod">
                            <b>Marca:</b>
                        </label>
                        <select class="form-control" id="brand_prod" name="brand_prod">
                            <option value="0" selected="">
                                Seleccione Marca
                            </option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->brand_bra }}">
                                    {{ $brand->name_bra }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-4" style="float: left;">
                        <label for="unit_prod">
                            <b>Unidad:</b>
                        </label>
                        <select class="form-control" id="unit_prod" name="unit_prod">
                            <option value="0" selected="">
                                Seleccione Unidad
                            </option>
                            @foreach($units as $unit)
                                <option value="{{ $unit->unit_uni }}">
                                    {{ $unit->name_uni }} ({{ $unit->prefix_uni }})
                                </option>
                            @endforeach
                        </select>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-4" style="float: left;">
                        <label for="stock_prod">
                            <b>Stock:</b>
                        </label>
                        <input type="text" class="form-control" id="stock_prod" name="stock_prod" placeholder="Ingresar Stock">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-4" style="float: left;">
                        <label for="stock_minimum_prod">
                            <b>Stock Mínimo:</b>
                        </label>
                        <input type="text" class="form-control" id="stock_minimum_prod" name="stock_minimum_prod" placeholder="Ingresar Stock Mínimo">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-4" style="float: left;">
                        <label for="purchase_price_prod">
                            <b>Precio Compra:</b>
                        </label>
                        <input type="text" class="form-control" id="purchase_price_prod" name="purchase_price_prod" placeholder="Ingresar Precio Compra">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-4" style="float: left;">
                        <label for="sale_price_prod">
                            <b>Precio Venta:</b>
                        </label>
                        <input type="text" class="form-control" id="sale_price_prod" name="sale_price_prod" placeholder="Ingresar Precio Venta">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-4" style="float: left;">
                        <label for="wholesale_price_prod">
                            <b>Precio al Mayor:</b>
                        </label>
                        <input type="text" class="form-control" id="wholesale_price_prod" name="wholesale_price_prod" placeholder="Ingresar Precio al Mayor">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-4" style="float: left;">
                        <label for="photo_prod">
                            <b>Imagen:</b>
                        </label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="photo_prod">
                            <label class="custom-file-label" id="photo_label" for="inputGroupFile02" aria-describedby="inputGroupFile02">
                                Seleccione Imagen
                            </label>
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-6" style="float: left;">
                        <label for="detail_prod">
                            <b>Detalle:</b>
                        </label><br>
                        <textarea name="detail_prod" id="detail_prod" cols="40" rows="3" style="resize: none;"></textarea>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-6" style="float: left;">
                        <label for="exp">
                            <b>Dispone de Fecha de Expiración?</b>  
                            <input type="checkbox" id="exp" name="exp" class="switchery" data-size="sm" value="1"/> 
                        </label>
                        <div id="exp_check">
                        </div>
                    </fieldset>
                </div>
                <br>

                <div class="modal-footer col-md-12" style="padding: 0px 35px 20px 35px;">
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
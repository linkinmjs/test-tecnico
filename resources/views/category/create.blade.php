<div class="modal fade" id="categoryCreate" tabindex="-1" role="dialog" aria-labelledby="exampleMo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleMo">Crear Categoria</h4>
            </div>
            <form action="{{ route('category_store_path') }}" method="POST" data-toggle="validator" role="form">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group has-feedback">
                        <label for="inputTwitter" class="control-label">Nombre</label>
                        <input type="text" name="name"  maxlength="30" class="form-control" placeholder="Nombre de la Categoria" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors">Ingrese un Nombre de la Categoria no mayor a 30 caracteres</div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputTwitter" class="control-label">Descripción</label>
                        <textarea name="description"  maxlength="200" class="form-control" placeholder="Descripción de la tarea" required></textarea>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors">Ingrese una descricion significativa de la categoria a agregar</div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputTwitter" class="control-label">Color</label>
                        <input id="cp9" type="text" class="form-control" name="color" value=""  />
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors">Selecione la categoria de la tarea!</div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                            <input type="checkbox" name="is_active" value="1">
                                Activa
                            </label>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
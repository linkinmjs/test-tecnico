<div class="modal fade" id="taskCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Crear Tarea</h4>
            </div>
            <form action="{{ route('task_store_path') }}" method="POST" data-toggle="validator" role="form">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group has-feedback">
                        <label for="inputTwitter" class="control-label">Titulo</label>
                        <input type="text" name="title"  maxlength="120" class="form-control" placeholder="Titulo de la tarea" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors">Ingrese el titulo de la tarea no mayor a 120 caracteres</div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputTwitter" class="control-label">Descripción</label>
                        <textarea name="description"  maxlength="200" class="form-control" placeholder="Descripción de la tarea" required></textarea>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors">Ingrese una descricion significativa de la tarea a agregar</div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputTwitter" class="control-label">Categoria</label>
                        <select name="category_id" class="form-control" required="">
                            <option value="">Seleccione la Categoria</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors">Selecione la categoria de la tarea!</div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                            <input type="checkbox" name="is_compleated" value="1">
                                Tarea Completada
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
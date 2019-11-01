<div class="modal fade" id="guyCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Cargar Individuo</h4>
            </div>
            <form action="{{ route('guy_store_path') }}" method="POST" data-toggle="validator" role="form">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group has-feedback">
                        <label for="inputTwitter" class="control-label">Nombre</label>
                        <input type="text" name="name"  maxlength="120" class="form-control" placeholder="Nombre del sujeto" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors">Ingrese el nombre</div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputTwitter" class="control-label">Ingrese la posición</label>
                        <textarea name="position"  maxlength="200" class="form-control" placeholder="Posición del sujeto" required></textarea>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors">Ingrese una descricion significativa de la tarea a agregar</div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputTwitter" class="control-label">Tarea asignada</label>
                        <select name="task_id" class="form-control" required="">
                            <option value="">Seleccione una de las tareas</option>
                            @foreach($tasks as $task)
                                <option value="{{ $task->id }}">{{ $task->title }}</option>
                            @endforeach
                        </select>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors">Debe asignarle una tarea</div>
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
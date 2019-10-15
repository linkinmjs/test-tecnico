@extends('base')

@section('title')
Crear nueva tarea
@endsection

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
      
        <div class="panel panel-primary">
            <div class="panel-heading">Editar Tarea</div>
            <form action="{{ route('task_update_path') }}" method="POST" data-toggle="validator" role="form">
                <div class="panel-body">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value=" {{$task->id}} ">
                    <div class="form-group has-feedback">
                        <label for="inputTwitter" class="control-label">Titulo</label>
                        <input type="text" name="title"  maxlength="120" class="form-control" placeholder="Titulo de la tarea" value="{{$task->title}}" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors">Ingrese el titulo de la tarea no mayor a 120 caracteres</div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputTwitter" class="control-label">Descripción</label>
                        <textarea name="description"  maxlength="200" class="form-control" placeholder="Descripción de la tarea" required>{{$task->description}}</textarea>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors">Ingrese una descricion significativa de la tarea a agregar</div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputTwitter" class="control-label">Categoria</label>
                        <select name="category_id" class="form-control" required="">
                            <option value="">Seleccione la Categoria</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" selected="{{ $task->id == $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors">Selecione la categoria de la tarea!</div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                            <input type="checkbox" name="is_compleated" value="1" {{ $task->is_compleated ? 'checked': '' }}>
                                Tarea Completada
                            </label>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="{{ route('task_index_path') }}" class="btn btn-default">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>

  </div>
</div>
@endsection
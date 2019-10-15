@extends('base')

@section('title')
  Actualizar Categoria
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">Editar Categoria</div>
                <form action="{{ route('category_update_path') }}" method="POST" data-toggle="validator" role="form">
                    <div class="panel-body">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value=" {{$category->id}} ">
                        <div class="form-group has-feedback">
                            <label for="inputTwitter" class="control-label">Nombre</label>
                            <input type="text" name="name"  maxlength="120" class="form-control" placeholder="Nombre de la tarea" value="{{$category->name}}" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors">Ingrese el titulo de la tarea no mayor a 30 caracteres</div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="inputTwitter" class="control-label">Descripción</label>
                            <textarea name="description"  maxlength="200" class="form-control" placeholder="Descripción de la tarea" required>{{$category->description}}</textarea>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors">Ingrese una descricion significativa de la tarea a agregar</div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="inputTwitter" class="control-label">Color</label>
                            <input id="cp9" type="text" class="form-control" name="color" value="{{$category->color}}" />
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors">Selecione la categoria de la tarea!</div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" name="is_active" value="1" {{ $category->is_active ? 'checked': '' }}>
                                Activa
                                </label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('category_index_path') }}" class="btn btn-default">Cancelar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('base')

@section('title')
  Tareas
@endsection

@section('content')

<div class="page-header">
  <h1>Lista de Tareas<small></small></h1>
</div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#panelTask" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Panel Principal</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="panelTask">
      <ul class="nav navbar-nav">
        <li>
            <a data-toggle="modal" data-target="#taskCreate" href="#">
                <span class="fas fa-file" aria-hidden="true"></span> Crear Tarea
            </a>
        </li>
      </ul>
        <form action="{{ route('task_search_path') }}" method="POST" class="navbar-form navbar-right">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar Tareas">
                <span class="input-group-btn">
                    <button class="btn btn-warning" type="submit">
                        <span class="fas fa-search" aria-hidden="true"></span> Buscar
                    </button>
                </span>
            </div>
        </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="panel panel-primary">
    <div class="panel-heading">Panel heading</div>
        <table class="table is-fullwidth">
            <thead>
              <tr>
                <th style="text-align: center"><b>#</b></th>
                <th style="text-align: center">Completado</th>
                <th style="text-align: center">Título</th>
                <th style="text-align: center">Descripción</th>
                <th style="text-align: center">Categoría</th>
                <th style="text-align: center">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @if(count($tasks) >= 1)
                    @foreach($tasks as $task)
                        <tr>
                            <td align="center"><b>{{ $task->id }}</b></td>
                            <td align="center">
                                <span class="icon">
                                    <a href="{{ route('task_update_status_path', $task->id) }}">
                                        <i class="{{ $task->is_compleated ? 'fas has-text-success' : 'far has-text-grey' }} fa-check-circle"></i>
                                    </a>
                                </span>
                            </td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td align="center">
                                @if(!empty($task->category))
                                  <span class="label label-default" style="background-color: {{ $task->category->color }}">{{ $task->category->name }}</span>
                                @endif
                            </td>
                          <td align="center">
                            <a class="btn btn-info btn-xs" data-toggle="modal" data-target="#taskShow-{{$task->id}}" href="#" href="#" title="Ver Detalle">
                                <span class="fas fa-eye" aria-hidden="true"></span>
                            </a>
                            <a class="btn btn-primary btn-xs" href="{{ route('task_edit_path', $task->id) }}" title="Editar">
                                <span class="fas fa-pen" aria-hidden="true"></span>
                            </a>
                            <a class="btn btn-danger btn-xs" role="button" data-toggle="collapse" href="#taskDetele-{{ $task->id }}" aria-expanded="false" aria-controls="taskDetele-{{ $task->id }}" title="Eliminar">
                                <span class="fas fa-trash-alt" aria-hidden="true"></span>
                            </a>
                            <div class="collapse" id="taskDetele-{{ $task->id }}" style="position: absolute;">
                              <div class="well" style="margin-bottom: 0px; margin: 0px; padding: 7px; width: 190px;"> 
                                    <small>¿Desea eliminar este registro?</small>
                                        <br>
                                    <a class="btn btn-success btn-xs" href="{{ route('task_destroy_path', $task->id) }}" title="Si">
                                        Si
                                    </a>
                                    <a class="btn btn-danger btn-xs" title="No" role="button" data-toggle="collapse" href="#taskDetele-{{ $task->id }}" aria-expanded="false" aria-controls="taskDetele-{{ $task->id }}">
                                        No
                                    </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                    @include('task.show')
                    @endforeach
                @else
                    <tr><td colspan="6" align="center"><small>No Existen Registros</small></td></tr>
                @endif
            </tbody>
        </table>
    <div class="panel-footer"></div>
</div>
@include('task.create')

@endsection

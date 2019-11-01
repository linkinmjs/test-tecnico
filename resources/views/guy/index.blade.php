@extends('base')

@section('title')
  Individuos
@endsection

@section('content')
    <div class="page-header">
        <h1>Lista de Individuos<small></small></h1>
    </div>
    <!-- PANEL PRINCIPAL -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#panelIndividuo" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Panel Principal</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="panelIndividuo">
                <ul class="nav navbar-nav">
                    <li>
                        <a data-toggle="modal" data-target="#guyCreate" href="#">
                        <span class="fas fa-file" aria-hidden="true"></span> Crear Individuo
                        </a>
                    </li>
                </ul>
                <form action="{{ route('guy_search_path') }}" method="POST" class="navbar-form navbar-right">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Buscar Individuo">
                        <span class="input-group-btn">
                        <button class="btn btn-warning" type="submit">
                        <span class="fas fa-search" aria-hidden="true"></span> Buscar
                        </button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- DATATABLE -->
    <div class="panel panel-primary">
        <div class="panel-heading">Individuos</div>
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th style="text-align: center"><b>#</b></th>
                    <th style="text-align: center">Nombre</th>
                    <th style="text-align: center">Tarea asignada</th>
                    <th style="text-align: center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if(count($guys) >= 1)
                    @foreach($guys as $guy)
                    <tr>
                        <td align="center"><b>{{ $guy->id }}</b></td>
                        <td align="center">{{ $guy->name }}</td>
                        <td align="center">
                                @if(!empty($guy->task_id))
                                  <span class="label label-default">{{ $guy->task_id }}</span>
                                @else
                                 <span class="label label-default">Ninguna tarea asignada</span>
                                @endif
                            </td>
                        <!-- Botones -->
                        <td align="center">
                            <a class="btn btn-info btn-xs" data-toggle="modal" data-target="#" href="#" href="#" title="Ver Detalle">
                                <span class="fas fa-eye" aria-hidden="true"></span>
                            </a>
                            <a class="btn btn-primary btn-xs" href="#" title="Editar">
                                <span class="fas fa-pen" aria-hidden="true"></span>
                            </a>
                            <a class="btn btn-danger btn-xs" role="button" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="" title="Eliminar">
                                <span class="fas fa-trash-alt" aria-hidden="true"></span>
                            </a>
                            <div class="collapse" id="taskDetele-{{ $guy->id }}" style="position: absolute;">
                              <div class="well" style="margin-bottom: 0px; margin: 0px; padding: 7px; width: 190px;"> 
                                    <small>¿Desea eliminar este registro?</small>
                                        <br>
                                    <a class="btn btn-success btn-xs" href="#" title="Si">
                                        Si
                                    </a>
                                    <a class="btn btn-danger btn-xs" title="No" role="button" data-toggle="collapse" href="" aria-expanded="false" aria-controls="">
                                        No
                                    </a>
                              </div>
                            </div>
                          </td>
                    </tr>
                    
                    @endforeach
                @else
                    <tr><td colspan="6" align="center"><small>No Existen Registros</small></td></tr>
                @endif

            </tbody>
        </table>
        <div class="panel-footer"></div>
    </div>
@endsection
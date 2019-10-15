@extends('base')

@section('title')
  Categorías
@endsection

@section('content')
    <div class="page-header">
        <h1>Lista de Categorías<small></small></h1>
    </div>
    <!-- PANEL PRINCIPAL -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#panelCategoria" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Panel Principal</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="panelCategoria">
                <ul class="nav navbar-nav">
                    <li>
                        <a data-toggle="modal" data-target="#categoryCreate" href="#">
                        <span class="fas fa-file" aria-hidden="true"></span> Crear Categoria
                        </a>
                    </li>
                </ul>
                <form action="{{ route('category_search_path') }}" method="POST" class="navbar-form navbar-right">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Buscar Categoria">
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
        <div class="panel-heading">Categorías</div>
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th style="text-align: center"><b>#</b></th>
                    <th style="text-align: center">Nombre</th>
                    <th style="text-align: center">Descripción</th>
                    <th style="text-align: center">Color</th>
                    <th style="text-align: center">Activo</th>
                    <th style="text-align: center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if(count($categories) >= 1)
                    @foreach($categories as $category)
                    <tr>
                        <td align="center"><b>{{ $category->id }}</b></td>
                        <td align="center">{{ $category->name }}</td>
                        <td align="center">{{ $category->description }}</td>
                        <td align="center">
                            <span class="label label-default" style="background-color: {{ $category->color }}">{{ $category->color }}</span>
                        </td>
                        <td align="center">
                            <a href="{{ route('category_update_status_path', $category->id) }}">
                                <span class="icon">
                                    <i class="{{ $category->is_active ? 'fas has-text-success' : 'far has-text-grey' }} fa-check-circle"></i>
                                </span>
                            </a>
                        </td>
                        <td align="center">
                            <a class="btn btn-info btn-xs" data-toggle="modal" data-target="#categoryShow-{{$category->id}}" href="#" title="Ver Detalle">
                                <span class="fas fa-eye" aria-hidden="true"></span>
                            </a>
                            <a class="btn btn-primary btn-xs" href="{{ route('category_edit_path', $category->id) }}" title="Editar">
                                <span class="fas fa-pen" aria-hidden="true"></span>
                            </a>
                            <a class="btn btn-danger btn-xs" role="button" data-toggle="collapse" href="#categoryDetele-{{ $category->id }}" aria-expanded="false" aria-controls="categoryDetele-{{ $category->id }}" title="Eliminar">
                                <span class="fas fa-trash-alt" aria-hidden="true"></span>
                            </a>
                            <div class="collapse" id="categoryDetele-{{ $category->id }}" style="position: absolute;">
                                <div class="well" style="margin-bottom: 0px; margin: 0px; padding: 7px; width: 190px;"> 
                                    <small>¿Desea eliminar este registro?</small>
                                    <br>
                                    <a class="btn btn-success btn-xs" href="{{ route('category_destroy_path', $category->id) }}" title="Si">
                                    Si
                                    </a>
                                    <a class="btn btn-danger btn-xs" title="No" role="button" data-toggle="collapse" href="#categoryDetele-{{ $category->id }}" aria-expanded="false" aria-controls="categoryDetele-{{ $category->id }}">
                                    No
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @include('category.show')
                    @endforeach
                @else
                    <tr><td colspan="6" align="center"><small>No Existen Registros</small></td></tr>
                @endif

            </tbody>
        </table>
        <div class="panel-footer"></div>
    </div>
@endsection
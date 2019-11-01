<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home_path') }}">
                <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::path() == '/' ? 'active' : '' }}">
                    <a href="{{ route('home_path') }}">Inicio</a>
                </li>
                <li class="{{ Request::is('guy') ? 'active' : '' }}">
                    <a href="{{ route('guy_index_path') }}">Individuos</a>
                </li>
                <li class="{{ Request::is('task') ? 'active' : '' }}">
                    <a href="{{ route('task_index_path') }}">Tareas 
                    <span class="badge">{{ Indicator::CountRegister('task') }}</span>
                    </a>
                </li>
                <li class="{{ Request::is('category') ? 'active' : '' }}">
                    <a href="{{ route('category_index_path') }}">Categorías 
                    <span class="badge">{{ Indicator::CountRegister('category') }}</span>
                    </a>
                </li>
            </ul>
            <form action="{{ route('task_search_path') }}" method="POST" class="navbar-form navbar-right">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" maxlength="40" name="search" class="form-control" placeholder="Buscar Tareas">
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
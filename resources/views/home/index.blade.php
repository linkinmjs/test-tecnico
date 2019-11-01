@extends('base')

@section('title')
  Inicio
@endsection

@section('content')
<div class="container-fluid">
    <div class="blog-header">
        <div class="row">
            <div class="col-sm-11">
                <h1 class="blog-title">ABM de tareas y categorías.</h1>
            </div>
            <div class="col-sm-1">
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Ir a
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Introducción</a></li>
                <li><a href="#agregados">Agregados</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">TO-DO</a></li>
                </ul>
                </div>
            </div>
        </div>
        <br>
        <p class="lead blog-description">Desarrollado bajo el framework Laravel V5.8 y Base de datos MySQL.</p>
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">Introducción</h2>
                <p class="blog-post-meta">09 marzo de 2019 Por <a href="https://www.linkedin.com/in/alberto-j-urbaez-r-544498122/">Alberto Urbaez</a></p>
                <h4>Enlace de Contacto</h4>
                <ol class="list-unstyled">
                    <li><a href="https://bitbucket.org/ajur91/">Bitbucket</a></li>
                    <li><a href="mailto:albertourbaez20@gmail.com" "email me">Gmail</a></li>
                    <li><a href="https://www.linkedin.com/in/alberto-j-urbaez-r-544498122/">linkedin</a></li>
                </ol>

                <p>Este desarrollo fue realizado siguiendo las pautas estabecidas por 25Watts.</p>
                <hr>
                <p>El desarrolo esta compuesto por la creación de un ABM funcional partiendo de un modelo ya definido en laravel V5.8 y utilizando como Manejador base de datos MySQL.</p>
                <br>
                <blockquote>
                    <p>Este sistema cuenta de 3 vistas principales que lo componen de las cuales son; Home, task, Category.</p>
                </blockquote>
                <br>
                <p>A continuación se describe el desarrollo realizado y las herramientas utilizadas.</p>
                <br>
                <h3>Menu Principal</h3>
                
                <p>Esta creado en un partial el cual permite la reutilizacion de su código en las diferentes vistas que conforman el desarrollo.</p>
                <br>
                <h4>Helper</h4>
                
                <p> El Menu Principal, cuenta con un Helper el cual le permite mostrart los indicadores de cantidad total de registros de una entidad, esta data se persiste gracias a la utilizacion del helper invocado en el menu.</p>
                
                <p> El llamado del Helper Personalizado es muy simple, con solo escribir este código en cualquier vista del sistema puedes obtener la cantidad de registros de la entidad</p>
                <br>
                <pre><code>Indicator::CountRegister('task');</code></pre>
                <br>
                <p>El parámetro <b>task</b> hace referencia a la entidad a la cual se desea que realice en conteo de registro, este Helper puede ser llamado desde una vista blade como desde un controlador</p>
                <br>
                <h4>Buscador</h4>

                <p>Este simple pero útil buscador ubicado en la parte superior derecha del menu, nos permite realizar busqueda de tareas sin importar en que vistas estemos posicionados, realiza una busqueda por el título de la tarea haciendo uso de la sentencia 'like' de sql a traves de ORM eloquent.</p>
                <br>
                <h3>Alert</h3>

                <p>Se implemento un partial de alert que se encuntra envevido en la base de maquetado, esto nos permite hacer el uso en el controlador de mensajes flash para emitirle al usuario los mensajes correspondinte a cada una de las acciones que realice o si en algún proceso se genero un error:</p>
                <br>
                <h3>Módulo Tarea</h3>

                <p>Este módulo cuenta con (2) dos vistas principales de las cuales son:</p>
                <br>
                <ul>
                    <li>Lista de Tareas (index)</li>
                    <li>Formulario</li>
                </ul>
                <br>
                <h4>Lista de Tareas</h4>

                <p>La lista de tareas esta implementada con el uso de una tabla maqueta con bootstrap y con el uso de sintaxis laravel para generar un forearch y recorrer el arreglo emitido por el controlado con las consulta de los registros existentes en base</p>

                <p>Ademas de ellos cuenta con tres acciones básicas para gestionar y manipular los datos de los cuales son:</p>
                <br>
                <ol>
                    <li>Ver detalle: Permite ver a traves de un modal el detalle del registro.</li>
                    <li>Editar: Nos redirecciona a la vista del formulario para realizar la edición.</li>
                    <li>Eliminar: nos permite realizar una eliminación rápida de un registro con su previa confirmación de la acción.</li>
                </ol>
                <br>
                <h4>Fomulario</h4>

                <p>Se implemento funcionalidades bootstrap al formulario para generar una experiencia más agradable al usuario y, realizar un formulario mas intuitivo que le muestre en tiempo real al usuario los inconveniente que pueden ir surgiendo al tratar de generar un registro</p>
                <br>

                <h3>Módulo Categorías</h3>

                <p>Este módulo cuenta con (2) dos vistas principales de las cuales son:</p>
                <br>
                <ul>
                    <li>Lista de Categorías (index)</li>
                    <li>Formulario</li>
                </ul>
                <br>
                <h4>Lista de Categorías</h4>

                <p>La lista de categorías es muy simil al del módulo de tarea, esta implementada con el uso de una tabla maqueta con bootstrap y con el uso de sintaxis laravel para generar un forearch y recorrer el arreglo emitido por el controlado.</p>

                <p>Además de ellos cuenta con tres acciones básicas para gestionar y manipular los datos de los cuales son:</p>
                <br>
                <ol>
                    <li>Ver detalle: Permite ver a traves de un modal el detalle de el registro.</li>
                    <li>Editar: Nos redirecciona a la vista del formulario para realizar la edición.</li>
                    <li>Eliminar: Nos permite realizar una eliminacion rápida de un registro con su previa confirmación de la acción.</li>
                    <li>Habilitar categoría: Con solo dar un clic en el icono que se muestra en la tabla podremos habilitar o deshabilitar las categorías.</li>
                </ol>
				<br>
                <p>Nota: una categoría deshabilidata no podrá ser selecionada en el formulario de tareas ya que existe una valicación que impide mostrar esos registro</p>
                <br>

                <h4>Fomulario</h4>
                <p>Se implementó funcionalidades bootstrap al formulario para generar una experiencia más agradable al usuario y, realizar un formulario más intuitivo que le muestre en tiempo real al usuario los inconveniente que pueden ir surgiendo al tratar de generar un registro</p>
            </div>
        </div>
        <!-- /.blog-main -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Resumen</h4>
                <p>El Propósito de este ABM básico es dar un ejemplo del framework laravel en su version 5.8, utilizando herramientas que nos provee el mismo framework como por ejemplo:</p>
                <br>
                <ul>
                	<li><b>Composer</b> - <small>Administrador de paquetes</small></li>
                	<li><b>Artisan</b> - <small>Interfaz de línea de comandos</small></li>
                	<li><b>Eloquent</b> - <small>ORM oficial de el famework</small></li>
                </ul>
                <br>
            </div>
        </div>
        <!-- /.blog-sidebar -->
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
             
                <h2 id="agregados" class="blog-post-title">Agregados</h2>
                <p class="blog-post-meta">31 Octubre de 2019 Por <a href="https://ar.linkedin.com/in/mauricio-joaquin-stampella-510680113">Stampella Mauricio</a></p>
                <h4>Enlace de Contacto</h4>
                <ol class="list-unstyled">
                    <li><a href="https://github.com/linkinmjs">Github</a></li>
                    <li><a href="mailto:linkinmjs@gmail.com" "email me">Gmail</a></li>
                    <li><a href="https://ar.linkedin.com/in/mauricio-joaquin-stampella-510680113">linkedin</a></li>
                </ol>

                <p>Commodo ex qui elit labore sunt.</p>
                <hr>
                <p>Do mollit esse commodo laboris.</p>
                <br>
                <blockquote>
                    <p>Consequat eu voluptate eiusmod sint ad ad ex mollit minim est.</p>
                </blockquote>
                <br>
                <p>Elit aute eiusmod ullamco et eu officia eu consequat velit.</p>
                <br>
                <h3>Ea in consequat est reprehenderit eu officia ad fugiat quis aliqua proident.</h3>
                
                <p>Incididunt laborum duis excepteur tempor labore id veniam aliquip quis sint consectetur. Est amet cupidatat aute veniam. Laborum officia consequat non non. Ad dolore voluptate est et anim nisi cupidatat ex magna mollit est. Dolore culpa et Lorem elit laboris. Consequat aliquip aliqua sunt occaecat irure. Qui exercitation do labore duis fugiat velit excepteur nulla id fugiat anim consectetur.</p>
                
            </div>
        </div>
    </div>
</div>
@endsection

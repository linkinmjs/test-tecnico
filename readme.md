<p align="center"><img src="https://www.25watts.com.ar/assets/img/logoN.png" alt="Logo"></p>
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Acerca de

Proyecto de prueba técnica. Correcciones y desarrollo.

Algunas de las tecnologías utilizadas:
- Laravel v5.8
- XAMPP (PHP 7.3.11)
- Composer v1.9.0

## Correcciones

- routes    - Función añadida sobre url "/".
- migration - Caracter ";" faltante en create_categories_table.
- TaskController - Caracter ">" faltante en el create del request.
- migration - Creada la migración modify_task_table.


## Despliegue del proyecto

A continuación, les brindo el paso a paso para levantar localmente el proyecto del repositorio:


- Clonar el proyecto - ```$git clone https://github.com/linkinmjs/test-tecnico.git```
- Crear manualmente la base en MySql
- Editar archivo .env (configurar DB)
- Instalar dependencias via composer - ```$composer install```
- Generar key - ```$php artisan key:generate```
- Crear tablas mediante comando migrate - ```$php artisan migrate```
- Crear registros de prueba - ```$php artisan db:seed```

#### TO-DO
- [x] Clonar repo sobre el que se trabajará
- [x] Instalar y configurar el proyecto
- [x] Solventar inconvenientes para compilar de manera correcta
- [x] Resolver problema de creación de Tareas
- [x] Asociar Tarea a Persona (individuo)
- [x] Documentar
- [ ] Crear nueva feature

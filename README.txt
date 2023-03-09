NUEVO PROYECTO:
laravel new examen-laravel

BREEZE:
composer require laravel/breeze
php artisan breeze:install
npm install
npm run dev

ARRANCAR SERVIDOR:
php artisan serve

CONFIGURAR LA BD EN .env
DB_DATABASE=examen_laravel
DB_USERNAME=alumno
DB_PASSWORD=alumno

CREAR LA BD EN PHPMYADMIN

EJECUTAR MIGRACION: php artisan make:migration alumnos --create=alumno
Incluimos en la migración los campos de la tabla alumnos


CREACIÓN DE LA CLASE Alumno (modelo)
php artisan make:model Alumno -a

Al incluir -a incluimos AlumnoFactory y AlumnoSeeder

Cambiamos el idioma de faker:
'faker_locale' => 'es_ES',

Desde DatabaseSeeder.php hacemos una llamada al seeder

EJECUTAMOS LA MIGRACIÓN: php artisan migrate:fresh --seed

public const HOME = '/';

PROGRAMAMOS EL CONTROLADOR DE ALUMNO PARA VISUALIZAR LA TABLA

Cambiamos a true los valores que retorna authorize() de Store y Update Request

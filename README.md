# php_crud_laravel_mysql
CRUD developed with Laravel + Bootstrap + MySQL

This repository has the base to develop any app who needs CRUD
Bootstrap Frontend (https://github.com/thiagoluna/bootstrap_frontend_crud)

1- Create tables with Migrations

Just configure .env to access database

2- Seed table with simple database seeder

Seeder in database/seedes/
php artisan migrate:refresh --seed

3- Model

Just 1 model, but can be an example for others

4- Controller

5- Views

4 blade views in resources/views

6- Routes

Main route - Route::resource('atleta','AtletaController')
Only this route allow use 5 methods: show - edit - store - update - destroy

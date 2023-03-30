How to make it work:

(1) Clone this project

git clone http://github.com/thopd88/WEBG301-GCH1101

(2) Go to sub-project folder

cd WEBG301-GCH1101/Book

(3) Install dependencies

composer update

(4) Copy .env.example to .env

cp .env.example .env

(5) Update .env file with database credentials

(6) Generate app key

php artisan key:generate

(7) Migrate database

php artisan migrate


----------------------------------------------------
php artisan make:controller BookController

php artisan make:model Book -m

php artisan migrate

--------> manually migrate: php artisan make:migration create_books_table

--------> fresh migrate: php artisan migrate:fresh


-> Edit migration

-> Create empty views: bookdetail.blade.php ; booklist.blade.php

-> Edit Book model follows migration

-> Edit BookController

-> Edit Routes

-> Finalise views: bookdetail.blade.php ; booklist.blade.php


------------------------------
php artisan make:controller Api/V1/BookController

Request to: http://127.0.0.1:8000/api/books/

------------------------------
CRUD controller creation:

php artisan make:controller BookController --resource

------------------------------
Session 13:

php artisan make:model Category -m

Call Seeder:

php artisan db:seed
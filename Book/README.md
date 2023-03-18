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
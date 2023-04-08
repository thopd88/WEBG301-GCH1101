
1. Create project:

composer create-project laravel/laravel CarsDealer

Add Debugbar:

composer require barryvdh/laravel-debugbar --dev

---------------------------------

2. Create Models:

php artisan make:model Cars -m

php artisan make:model Customers -m

php artisan make:model Sales -m

php artisan make:model Suppliers -m

php artisan make:model Parts -m

php artisan make:migration create_car_part_table

After that, you need to edit the migration file and models to add the relationships between them.
----------------------------------
3. Create Controllers:

php artisan make:controller CarsController --resource

php artisan make:controller CustomersController --resource

php artisan make:controller SalesController --resource

php artisan make:controller SuppliersController --resource

php artisan make:controller PartsController --resource

------------------------------------
4. Create Views:

cars.index

cars.create

cars.edit

customers.index

customers.create

customers.edit

sales.index

sales.create

sales.edit

suppliers.index

suppliers.create

suppliers.edit

parts.index

parts.create

parts.edit

------------------------------------

5. Create Routes:

Route::resource('cars', CarsController::class);

Route::resource('customers', CustomersController::class);

Route::resource('sales', SalesController::class);

Route::resource('parts', PartsController::class);

Route::resource('suppliers', SuppliersController::class);

------------------------------------

6. Create Database:

php artisan migrate

------------------------------------

7. Run Seeder:

php artisan db:seed

------------------------------------
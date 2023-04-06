
1. Create project:

composer create-project laravel/laravel CarsDealer

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


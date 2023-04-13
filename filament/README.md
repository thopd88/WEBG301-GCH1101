Filament install
================
https://filamentphp.com/docs/2.x/admin/resources/getting-started#automatically-generating-forms-and-tables

## Installation

composer require filament/filament:"^2.0"

php artisan migrate

php artisan make:filament-user

Create Book model and migration:

php artisan make:model Book -m

(Optional) Auto generate forms and tables

composer require doctrine/dbal --dev

php artisan make:filament-resource Book --generate
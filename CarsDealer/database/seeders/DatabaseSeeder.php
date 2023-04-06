<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cars;
use App\Models\Customers;
use App\Models\Sales;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $car1 = new Cars(
            [
                'Make' => 'Audi',
                'Model' => 'A4',
                'TravelledDistance' => 100000,
            ]
        );
        $car2 = new Cars(
            [
                'Make' => 'Toyota',
                'Model' => 'Camry',
                'TravelledDistance' => 200000,
            ]
        );

        $car1->save();
        $car2->save();

        $customer1 = new Customers(
            [
                'Name' => 'John',
                'BirthDate' => '1990-01-01',
                'IsYoungDriver' => true,
            ]
        );

        $customer1->save();

        $customer2 = new Customers(
            [
                'Name' => 'Jane',
                'BirthDate' => '1995-01-01',
                'IsYoungDriver' => false,
            ]
        );

        $customer2->save();

        $sale1 = new Sales(
            [
                'Discount' => 0.1,
                'CarId' => $car1->Id,
                'CustomerId' => $customer1->Id,
            ]
        );

        $sale1->save();


    }
}

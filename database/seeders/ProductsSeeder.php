<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductsImport;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        Excel::import(new ProductsImport, storage_path('app/products.xlsx')); // или .csv
    }
}


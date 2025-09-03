<?php

namespace App\Imports;

use App\Models\Products;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Products([
            'brand' => $row['brand'],
            'article' => $row['article'],
            'name' => $row['name'],
            'series' => $row['series'],
            'description' => $row['description'],
            'type' => $row['type'],
            'size_guide_height' => $row['size_guide_height'],
            'size_guide_length' => $row['size_guide_length'],
            'size_guide_width' => $row['size_guide_width'],
            'handle_length' => $row['handle_length'],
            'features' => $row['features'],
            'color' => $row['color'],
            'decoration' => $row['decoration'],
            'print' => $row['print'],
            'release_year' => $row['release_year'],
            'edition' => $row['edition'],
            'brand_country' => $row['brand_country'],
            'manufacturer_country' => $row['manufacturer_country'],
            'price' => $row['price'],
            'package_description' => $row['package_description'],
            'package_type' => $row['package_type'],
            'package_height' => $row['package_height'],
            'package_length' => $row['package_length'],
            'package_width' => $row['package_width'],
            'weight' => $row['weight'],
            'set' => $row['set'],
            'care_instructions' => $row['care_instructions'],
            'quantity' => $row['quantity'],
        ]);
    }
}

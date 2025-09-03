<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;

use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function showAddProductPage()
    {

        $products = Products::all();
        return view('admin.add-product', compact('products'));
    }


    public function addProduct(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'nullable|string|max:255',
            'article' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'series' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'type' => 'nullable|string|max:255',
            'size_guide_height' => 'nullable|numeric|min:0',
            'size_guide_length' => 'nullable|numeric|min:0',
            'size_guide_width' => 'nullable|numeric|min:0',
            'handle_length' => 'nullable|numeric|min:0',
            'features' => 'nullable|string',
            'color' => 'nullable|string|max:255',
            'decoration' => 'nullable|string|max:255',
            'print' => 'nullable|string|max:255',
            'release_year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'edition' => 'nullable|string|max:255',
            'brand_country' => 'nullable|string|max:255',
            'manufacturer_country' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'package_description' => 'nullable|string',
            'package_type' => 'nullable|string|max:255',
            'package_height' => 'nullable|numeric|min:0',
            'package_length' => 'nullable|numeric|min:0',
            'package_width' => 'nullable|numeric|min:0',
            'weight' => 'nullable|integer|min:0',
            'set' => 'nullable|string',
            'care_instructions' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
        ]);


        $product = Products::create($validated);

        // Сохранение изображений продукта
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Ensure the directory exists
                $destinationPath = 'images/Products';
                if (!Storage::exists($destinationPath)) {
                    Storage::makeDirectory($destinationPath);
                }

                // Move the image to the directory
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path($destinationPath), $imageName);

                // Save the image path to the database
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $destinationPath . '/' . $imageName
                ]);
            }
        }

        return redirect()->back()->with('success', 'Товар успешно добавлен!');
    }
}

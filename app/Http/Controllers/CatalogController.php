<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function showCatalogPage($category = null)
    {
        return view('catalog', compact('category'));
    }

    public function showGalleryPage()
    {
        return view('gallery');
    }

    public function showCartPage()
    {
        return view('cart');
    }

}

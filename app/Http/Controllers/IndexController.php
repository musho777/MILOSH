<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showAdminHomePage(){

        return view('admin.home');
    }

    public function showImportPage(){

        return view('admin.import');
    }
}

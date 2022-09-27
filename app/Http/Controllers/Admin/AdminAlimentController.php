<?php

namespace App\Http\Controllers\Admin;

use App\Models\Aliment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["aliments"] = Aliment::all();
        return view('admin.aliment.index')->with("viewData", $viewData);
    }
}

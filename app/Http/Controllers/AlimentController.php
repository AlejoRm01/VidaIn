<?php

namespace App\Http\Controllers;

use App\Models\Aliment;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Aliments";

        return view("aliment.index")->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = Aliment::findOrFail($id);
        $viewData["title"] = $product->getName()." - VidaIn";
        $viewData["subtitle"] = $product->getName()." - Alimen information";
        $viewData["aliment"] = $product;
        
        return view("aliment.show")->with("viewData", $viewData);
    }

}
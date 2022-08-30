<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UsController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Sobre nosotros';
        $viewData['subtitle'] = '';

        return view('us.index')->with('viewData', $viewData);
    }
}

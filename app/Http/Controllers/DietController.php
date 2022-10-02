<?php

namespace App\Http\Controllers;

use App\Models\Diet;

class DietController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Alimentos';
        $viewData['subtitle'] = 'Informacion de alimentos';
        $viewData['aliments'] = Diet::all();

        return view('aliment.index')->with('viewData', $viewData);
    }
}

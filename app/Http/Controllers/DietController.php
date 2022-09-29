<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
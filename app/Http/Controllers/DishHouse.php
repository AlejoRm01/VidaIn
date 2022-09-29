<?php

namespace App\Http\Controllers;

use App\Models\DishHouse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DishHouseController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Alimentos';
        $viewData['subtitle'] = 'Informacion de alimentos';
        $viewData['aliments'] = DishHouse::all();

        return view('aliment.index')->with('viewData', $viewData);
    }
}
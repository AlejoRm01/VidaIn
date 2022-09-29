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
        $viewData['title'] = 'Comida del hogar';
        $viewData['subtitle'] = 'Informacion comida del hogar';
        $viewData['dishHouses'] = DishHouse::all();

        return view('dishHouse.index')->with('viewData', $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $dishHouse = DishHouse::findOrFail($id);
        $viewData['title'] = $dishHouse->getName().' - VidaIn';
        $viewData['subtitle'] = $dishHouse->getName().' - Informacion de DishHouseos';
        $viewData['dishHouse'] = $dishHouse;

        return view('dishHouse.show')->with('viewData', $viewData);
    }

    public function search(Request $request)
    {
        $viewData = [];
        $query = $request->input('query');
        $search = DishHouse::where('name', 'like', '%'.$query.'%')->get();
        $viewData['title'] = 'Buscar    Platos';
        $viewData['subtitle'] = 'Aqui encontraras informacion de todos los platos hogareños';
        $viewData['dishHouses'] = $search;

        return view('dishHouse.search')->with('viewData', $viewData);
    }
}
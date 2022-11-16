<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DishHouse;
use App\Models\HistoryDishHouse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $table = DishHouse::all();
        $aux = $table->count();
        $num = rand(1, $aux);
        
        $viewData = [];
        $dishHouse = DishHouse::findOrFail($id);
        $viewData['title'] = $dishHouse->getName().' - VidaIn';
        $viewData['subtitle'] = $dishHouse->getName().' - Informacion de DishHouseos';
        $viewData['dishHouse'] = $dishHouse;

        $ingredients = explode("/", $dishHouse->getIngredients());
        $instructions = explode("/", $dishHouse->getInstructions());

        $viewData['ingredients'] = $ingredients;
        $viewData['instructions'] = $instructions;

        $recomendation = DishHouse::findOrFail($num);
        $viewData['recomendation'] = $recomendation;

        return view('dishHouse.show')->with('viewData', $viewData);
    }

    public function search(Request $request)
    {
        $viewData = [];
        $query = $request->input('query');
        $search = DishHouse::where('name', 'like', '%'.$query.'%')
                            ->orWhere('dailyCategory', 'like', '%'.$query.'%')
                            ->orWhere('healthyCategory', 'like', '%'.$query.'%')
                            ->orWhere('ingredients', 'like', '%'.$query.'%')
                            ->get();
        $viewData['title'] = 'Buscar    Platos';
        $viewData['subtitle'] = 'Aqui encontraras informacion de todos los platos hogareños';
        $viewData['dishHouses'] = $search;

        return view('dishHouse.search')->with('viewData', $viewData);
    }

    public function foodRegister($id)
    {
        $userId = Auth::user()->getId();
        $food = new HistoryDishHouse();     
        $food->setUserId($userId);
        $food->setDishHouseId($id);
        $dishHouse = DishHouse::findOrFail($id);
        $food->setName($dishHouse->getName());
        $food->setCategory($dishHouse->getHealthyCategory());
        $food->save();
        
        return redirect()->route("home.index");
    }
}


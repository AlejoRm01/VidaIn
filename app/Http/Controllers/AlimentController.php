<?php

namespace App\Http\Controllers;

use App\Models\Aliment;
use Illuminate\Http\Request;

class AlimentController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Alimentos';
        $viewData['subtitle'] = 'Informacion de alimentos';
        $viewData['aliments'] = Aliment::all();

        return view('aliment.index')->with('viewData', $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = Aliment::findOrFail($id);
        $viewData['title'] = $aliment->getName().' - VidaIn';
        $viewData['subtitle'] = $aliment->getName().' - Informacion de alimentos';
        $viewData['aliment'] = $aliment;

        return view('aliment.show')->with('viewData', $viewData);
    }

    public function search(Request $request)
    {
        $viewData = [];
        $query = $request->input('query');
        $search = Aliment::where('name', 'like', '%'.$query.'%')->get();
        $viewData['title'] = 'Buscar alimentos';
        $viewData['subtitle'] = 'Aqui encontraras informacion de todos los alimentos';
        $viewData['aliments'] = $search;

        return view('aliment.search')->with('viewData', $viewData);
    }
}

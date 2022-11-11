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
        $viewData['aliments'] = AlimentController::$aux;

        return view('aliment.index')->with('viewData', $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $aliment = Aliment::findOrFail($id);
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

    }
    public static $aux = ['/img/alimentos/001.png','/img/alimentos/002.png','/img/alimentos/003.png','/img/alimentos/004.png','/img/alimentos/005.png','/img/alimentos/006.png'];
}

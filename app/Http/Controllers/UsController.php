<?php

namespace App\Http\Controllers;

class UsController extends Controller
{
    public static $integrantes = [
        [ 'src' => '/photo/1.jpeg', 'name' => 'Izabella Valencia'],
        ['src' => '/photo/2.jpeg', 'name' => 'Manuela Restrepo'],
        ['src' => '/photo/3.jpeg', 'name' => 'Yuliana Olaya'],
        ['src' => '/photo/4.jpeg', 'name' => 'Alejandro Rodriguez'],
        ['src' => '/photo/5.jpeg', 'name' => 'Mateo Ángel'],
        ['src' => '/photo/6.jpeg', 'name' => 'Santiago Díaz']
    ];

    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Sobre nosotros';
        $viewData['subtitle'] = 'Integrantes';
        $viewData['integrantes'] = UsController::$integrantes;

        return view('us.index')->with('viewData', $viewData);
    }
}

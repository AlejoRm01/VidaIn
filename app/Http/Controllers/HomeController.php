<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Home Page - VidaIn';
        $viewData['subtitle'] = '';

        return view('home.index')->with('viewData', $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData['title'] = 'Sobre nosotros';
        $viewData['subtitle'] = 'Integrantes';
        $viewData['integrantes'] = HomeController::$integrantes;

        return view('home.about')->with('viewData', $viewData);
    }

    public static $integrantes = [
        ['src' => '/photo/1.jpeg', 'name' => 'Izabella Valencia'],
        ['src' => '/photo/2.jpeg', 'name' => 'Manuela Restrepo'],
        ['src' => '/photo/3.jpeg', 'name' => 'Yuliana Olaya'],
        ['src' => '/photo/4.jpeg', 'name' => 'Alejandro Rodriguez'],
        ['src' => '/photo/5.jpeg', 'name' => 'Mateo Ángel'],
        ['src' => '/photo/6.jpeg', 'name' => 'Santiago Díaz'],
    ];
}

<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Home Page - Nutri-App';
        $viewData['subtitle'] = '';

        return view('home.index')->with('viewData', $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData['title'] = 'Sobre nosotros';
        $viewData['subtitle'] = 'Integrantes';
        $viewData['integrantes'] = HomeController::$photo;

        return view('home.about')->with('viewData', $viewData);
    }

    public function select()
    {
        $viewData = [];
        $viewData['title'] = '';
        $viewData['subtitle'] = '';

        return view('home.select')->with('viewData', $viewData);
    }

    public function type($tipo)
    {
        $viewData = [];
        $viewData['title'] = '';
        $viewData['subtitle'] = '';
        $viewData['tipo'] = $tipo;
        return view('home.type')->with('viewData', $viewData);
    }

    public static $photo = '/img/team.jpg';
}

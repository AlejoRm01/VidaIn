<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Home Page - Online Store';
        $viewData['subtitle'] = '';

        return view('home.index')->with('viewData', $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData['title'] = 'VidaIn';
        $viewData['description'] = 'Nuestro equipo';
        $viewData['author'] = 'Desarrollado por: Alejandro Rrodriguez Muñoz';

        return view('home.about')->with('viewData', $viewData);
    }
}

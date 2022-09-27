<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Home Page - Senut';
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
    public static $photo = '/photo/groupPhoto.jpg';

}

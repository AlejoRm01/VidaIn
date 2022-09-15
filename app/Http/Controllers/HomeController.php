<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'VidaIn - Vida independiente';
        $viewData['subtitle'] = 'VIDAIN 2022';

        return view('home.index')->with('viewData', $viewData);
    }
}

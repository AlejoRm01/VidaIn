<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Perfil - Nutri-App';
        $viewData['subtitle'] = '';

        return view('profile.index')->with('viewData', $viewData);
    }
}

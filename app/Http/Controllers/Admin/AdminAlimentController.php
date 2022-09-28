<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aliment;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Products - Online Store';
        $viewData['aliments'] = Aliment::all();

        return view('admin.aliment.index')->with('viewData', $viewData);
    }
}

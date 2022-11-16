<?php

namespace App\Http\Controllers;

use App\Models\HistoryDishHouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Perfil - Nutri-App';
        $viewData['subtitle'] = '';
        $id = Auth::user()->getId();
        $viewData['historyDishHouses'] = HistoryDishHouse::where('user_id', $id)->orderBy('created_at', 'desc')->get();
                                                
        return view('profile.index')->with('viewData', $viewData);
    }
}

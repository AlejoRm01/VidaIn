<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DishHouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminDishHouseController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Administrador Senut';
        $viewData['dishHouse'] = DishHouse::all();

        return view('admin.dishHouse.index')->with('viewData', $viewData);
    }

    public function store(Request $request)
    {
        DishHouse::validate($request);

        $newdishHouse = new DishHouse();
        $newdishHouse->setName($request->input('name'));
        $newdishHouse->setDescription($request->input('description'));
        $newdishHouse->setHealthyCategory($request->input('healthyCategory'));
        $newdishHouse->setInstructions($request->input('instructions'));
        $newdishHouse->setIngredients($request->input('ingredients'));
        $newdishHouse->setImage('dishHouse.png');
        $newdishHouse->setVideo($request->input('video'));
        $newdishHouse->save();

        if ($request->hasFile('image')) {
            $imageName = $newdishHouse->getId().'.'.$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newdishHouse->setImage($imageName);
            $newdishHouse->save();
        }

        return back();
    }

    public function delete($id)
    {
        DishHouse::destroy($id);

        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = 'Administrador Senut';
        $viewData['dishHouse'] = DishHouse::findOrFail($id);

        return view('admin.dishHouse.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        DishHouse::validate($request);
        $dishHouse = DishHouse::findOrFail($id);
        $dishHouse->setName($request->input('name'));
        $dishHouse->setDescription($request->input('description'));
        $dishHouse->setHealthyCategory($request->input('healthyCategory'));
        $dishHouse->setInstructions($request->input('instructions'));
        $dishHouse->setIngredients($request->input('ingredients'));
        $dishHouse->setImage('dishHouse.png');
        $dishHouse->setVideo($request->input('video'));

        if ($request->hasFile('image')) {
            $imageName = $dishHouse->getId().'.'.$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );

            $dishHouse->setImage($imageName);
        }

        $dishHouse->save();

        return redirect()->route('admin.dishHouse.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aliment;
use Illuminate\Support\Facades\Storage;

class AdminAlimentController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Administrador Senut';
        $viewData['aliments'] = Aliment::all();

        return view('admin.aliment.index')->with('viewData', $viewData);
    }

    public function store(Request $request)
    {
        
        Aliment::validate($request);

        $newaliment = new Aliment();
        $newaliment->setBarcode($request->input('barCode'));
        $newaliment->setName($request->input('name'));
        $newaliment->setBrand($request->input('brand'));
        $newaliment->setCategory($request->input('category'));
        $newaliment->setWeight($request->input('weight'));
        $newaliment->setCalories($request->input('calories'));
        $newaliment->setCarbohydrate($request->input('carbohydrate'));
        $newaliment->setFats($request->input('fats'));
        $newaliment->setProteins($request->input('proteins'));
        $newaliment->setFiber($request->input('fiber'));
        $newaliment->setCholesterol($request->input('cholesterol'));
        $newaliment->setImage("aliment.png");
        $newaliment->save();

        if ($request->hasFile('image')) {
            $imageName = $newaliment->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newaliment->setImage($imageName);
            $newaliment->save();
        }

        return back();
    }

    public function delete($id)
    {
        Aliment::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Administrador Senut";
        $viewData["aliment"] = Aliment::findOrFail($id);
        return view('admin.aliment.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {

        Aliment::validate($request);

        $aliment = Aliment::findOrFail($id);
        $aliment->setBarCode($request->input('barCode'));
        $aliment->setName($request->input('name'));
        $aliment->setBrand($request->input('brand'));
        $aliment->setCategory($request->input('category'));
        $aliment->setWeight($request->input('weight'));
        $aliment->setCalories($request->input('calories'));
        $aliment->setCarbohydrate($request->input('carbohydrate'));
        $aliment->setFats($request->input('fats'));
        $aliment->setProteins($request->input('proteins'));
        $aliment->setFiber($request->input('fiber'));
        $aliment->setCholesterol($request->input('cholesterol'));
       

        if ($request->hasFile('image')) {
            $imageName = $aliment->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );

            $aliment->setImage($imageName);
        }

        $aliment->save();
        return redirect()->route('admin.aliment.index');
    }
}

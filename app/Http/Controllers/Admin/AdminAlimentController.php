<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aliment;

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

        $newProduct = new Aliment();
        $newProduct->setId($request->input('barCode'));
        $newProduct->setName($request->input('name'));
        $newProduct->setBrand($request->input('brand'));
        $newProduct->setCategory($request->input('category'));
        $newProduct->setWeight($request->input('weight'));
        $newProduct->setCalories($request->input('calories'));
        $newProduct->setCarbohydrate($request->input('carbohydrate'));
        $newProduct->setFats($request->input('fats'));
        $newProduct->setProteins($request->input('proteins'));
        $newProduct->setFiber($request->input('fiber'));
        $newProduct->setCholesterol($request->input('cholesterol'));
        $newProduct->setImage("aliment.png");
        $newProduct->save();

        if ($request->hasFile('image')) {
            $imageName = $newProduct->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newProduct->setImage($imageName);
            $newProduct->save();
        }

        return back();
    }

    public function delete($id)
    {
        Product::destroy($id);
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

        $product = Aliment::findOrFail($id);
        $product->setId($request->input('id'));
        $product->setBarCode($request->input('barCode'));
        $product->setName($request->input('name'));
        $product->setBrand($request->input('brand'));
        $product->setCategory($request->input('category'));
        $product->setWeight($request->input('weight'));
        $newProduct->setCalories($request->input('calories'));
        $newProduct->setCarbohydrate($request->input('carbohydrate'));
        $newProduct->setFats($request->input('fats'));
        $newProduct->setProteins($request->input('Proteins'));
        $newProduct->setFiber($request->input('Fiber'));
        $newProduct->setCholesterol($request->input('cholesterol'));
       

        if ($request->hasFile('image')) {
            $imageName = $product->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );

            $product->setImage($imageName);
        }

        $product->save();
        return redirect()->route('admin.aliment.index');
    }
}

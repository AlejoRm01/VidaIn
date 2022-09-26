<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aliment extends Model
{
    use HasFactory;

   /**
      * ALIMENT ATTRIBUTES
      * this->attribute['id'] - int - contains the aliment primary key (id)
      *  this -> attribute['barcode'] - int - contains the aliment bar code
      * $this->attributes['name'] - string - contains the aliment name
      * $this->attributes['brand'] - string - contains the aliment brand
      * $this->attributes['category'] - string - contains the aliment category
      * $this->attributes['weight'] - float - contains the aliment weight
      * $this->attributes['calories'] - int - contains the  aliment calories
      * $this->attributes['carbohydrates'] - int - contains the  aliment carbohydrates
      * $this->attributes['fats'] - int - contains the  aliment fats
      * $this->attributes['proteins'] - int - contains the  aliment proteins
      * $this->attributes['fiber'] - int - contains the  aliment fiber
      * $this->attributes['cholesterol'] - int - contains the  aliment cholesterol
      * $this->attributes['image'] - string - contains the aliment image
      * $this->attributes['created_at'] - timestamp - contains the aliment creation date
      * $this->attributes['updated_at'] - timestamp - contains the aliment update date

     */
    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:255",
            "brand" => "required|max:255",
            "category" => "required|max:50",
            "weight" => "required",
            "calories" => "required|numeric|gt:0",
            "carbohydrate" => "required|numeric|gt:0",
            "fats" => "required|numeric|gt:0",
            "proteins" => "required|numeric|gt:0",
            "fiber" => "required|numeric|gt:0",
            "cholesterol" => "required|numeric|gt:0",
            'image' => 'image'
        ]);
    }

    public static function getId()
    {
        return $this->attribuites['id'];
    }

    public static function setId($id)
    {
        return $this->attribute['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getBrand()
    {
        return $this->attributes['brand'];
    }

    public function setBrand($brand)
    {
        $this->attributes['brand'] = $brand;
    }

    public function getCategory()
    {
        return $this->attributes['category'];
    }

    public function setCategory($category)
    {
        $this->attributes['category'] = $category;
    }

    public function getWeight()
    {
        return $this->attributes['weight'];
    }

    public function setWeight($weight)
    {
        $this->attributes['weight'] = $weight;
    }

    public function getCalories()
    {
        return $this->attributes['calories'];
    }

    public function setCalories($calories)
    {
        $this->attributes['calories'] = $calories;
    }

    public function getCarbohydrates()
    {
        return $this->attributes['carbohydrates'];
    }

    public function setCarbohydrate($carbohydrates)
    {
        $this->attributes['carbohydrates'] = $carbohydrates;
    }


    public function getFats()
    {
        return $this->attributes['fats'];
    }

    public function setFats($fats)
    {
        $this->attributes['fats'] = $fats;
    }

    public function getProteins()
    {
        return $this->attributes['proteins'];
    }

    public function setProteins($proteins)
    {
        $this->attributes['proteins'] = $proteins;
    }

    public function getFiber()
    {
        return $this->attributes['fiber'];
    }

    public function setFiber($fiber)
    {
        $this->attributes['fiber'] = $fiber;
    }

    public function getCholesterol()
    {
        return $this->attributes['cholesterol'];
    }

    public function setCholesterol($cholesterol)
    {
        $this->attributes['cholesterol'] = $cholesterol;
    }
    
    public function getImage()
    {
        return $this->attributes['image'];
    }

    public function setImage($Image)
    {
        $this->attributes['image'] = $Image;
    }
}



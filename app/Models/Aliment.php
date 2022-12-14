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
     * this -> attribute['barcode'] - int - contains the aliment bar code
     * $this->attributes['name'] - string - contains the aliment name
     * $this->attributes['brand'] - string - contains the aliment brand
     * $this->attributes['category'] - string - contains the aliment category
     * $this->attributes['weight'] - float - contains the aliment weight
     * $this->attributes['calories'] - int - contains the  aliment calories
     * $this->attributes['carbohydrate'] - int - contains the  aliment carbohydrates
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
            'barCode' => 'required|max:255',
            'name' => 'required|max:255',
            'brand' => 'required|max:255',
            'category' => 'required|max:50',
            'weight' => 'required',
            'calories' => 'required|gt:0',
            'carbohydrate' => 'required|gt:0',
            'fats' => 'required|gt:0',
            'proteins' => 'required|gt:0',
            'fiber' => 'required|gt:0',
            'cholesterol' => 'required|gt:0',
            'image' => 'image',
        ]);
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getBarCode()
    {
        return $this->attributes['barCode'];
    }

    public function setBarCode($barCode)
    {
        $this->attributes['barCode'] = $barCode;
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

    public function getCarbohydrate()
    {
        return $this->attributes['carbohydrate'];
    }

    public function setCarbohydrate($carbohydrates)
    {
        $this->attributes['carbohydrate'] = $carbohydrates;
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

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }
}

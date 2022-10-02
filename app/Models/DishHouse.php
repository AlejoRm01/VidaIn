<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishHouse extends Model
{
    use HasFactory;

    public static function validate($request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'healthyCategory' => 'required|max:1',
            'ingredients'=> 'required',
            'instructions' => 'required',
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

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getDescription()
    {
        return $this->attributes['description'];
    }

    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }

    public function getHealthyCategory()
    {
        return $this->attributes['healthyCategory'];
    }

    public function setHealthyCategory($healthyCategory)
    {
        $this->attributes['healthyCategory'] = $healthyCategory;
    }

    public function getInstructions()
    {
        return $this->attributes['instructions'];
    }

    public function setInstructions($instructions)
    {
        $this->attributes['instructions'] = $instructions;
    }

    public function getIngredients()
    {
        return $this->attributes['ingredients'];
    }

    public function setIngredients($ingredients)
    {
        $this->attributes['ingredients'] = $ingredients;
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

    public function diet()
    {
        return $this->hasMany(diet::class);
    }

    public function getDiet()
    {
        return $this->diet;
    }

    public function setDiet($diet)
    {
        $this->diet = $diet;
    }
}

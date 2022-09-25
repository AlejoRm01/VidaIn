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
}

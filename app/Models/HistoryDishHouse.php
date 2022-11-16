<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\DishHouse;
use App\Models\User;

class HistoryDishHouse extends Model
{
    
    /**
    * ORDER ATTRIBUTES
    * $this->attributes['id'] - int - contains the order primary key (id)
    * $this->attributes['user_id'] - int - contains the referenced user id
    * $this->attributes['dishHouse_id'] - int - contains the referenced dish house id
    * $this->attributes['created_at'] - timestamp - contains the order creation date
    * $this->attributes['updated_at'] - timestamp - contains the order update date
    * $this->user - User - contains the associated User

    * $this->User - User[] - contains the associated Users
    * $this->DishHouse - DishHouse[] - contains the associated DishHouses
    */
    use HasFactory;
    
    public static function validate($request)
    {
        $request->validate([
            "user_id" => "required|exists:users,id",
            "dishHouse_id" => "required|exists:dish_houses,id",
            "name" => "required",
            "category" => "required"
        ]);
    }

    public function getName()
    {
        return $this->attributes['name'];
    }
    
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getCategory()
    {
        return $this->attributes['category'];
    }
    
    public function setCategory($category)
    {
        $this->attributes['category'] = $category;
    }

    
    public function getDishHouseId()
    {
        return $this->attributes['dishHouse_id'];
    }
    
    public function setDishHouseId($dishHouse_id)
    {
        $this->attributes['dishHouse_id'] = $dishHouse_id;
    }

    public function getId()
    {
        return $this->attributes['id'];
    }
    
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }
    
    public function setUserId($userId)
    {
        $this->attributes['user_id'] = $userId;
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
    
    public function user()
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

    public function dishHouses()
    {
        return $this->belongsTo(DishHouses::class);
    }
    
    public function getDishHouses()
    {
        return $this->dishHouses;
    }
    
    public function setDishHouses($dishHouses)
    {
        $this->dishHouses = $dishHouses;
    }
}   


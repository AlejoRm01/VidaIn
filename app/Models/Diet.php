<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'description',
    ];

    public function dishHouse()
    {
        return $this->belongsTo(DishHouse::class);
    }

    public function getDishHouse()
    {
        return $this->dishHouse;
    }

    public function setDishHouse($dishHouse)
    {
        $this->dishHouse = $dishHouse;
    }
}

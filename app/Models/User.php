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

    /*
       * USER ATTRIBUTES
       * $this->attributes['id'] - int - contains the user primary key (id)
       * $this->attributes['name'] - string - contains the user name
       * $this->attributes['email'] - string - contains the user email
       * $this->attributes['email_verified_at'] - timestamp - contains the user email verification date
       * $this->attributes['password'] - string - contains the user password
       * $this->attributes['remember_token'] - string - contains the user password
       * $this->attributes['created_at'] - timestamp - contains the user creation date
       * $this->attributes['updated_at'] - timestamp - contains the user update date
       * $this->attributes['city'] - string - contains the user city
       * $this->attributes['address'] - string - contains the user address
       * $this->attributes['phone'] - string - contains the user phone
       * $this->attributes['document'] - string - contains the user document
       * $this->attributes['comorbidities'] - string - contains the comorbidities of the user
       * $this->attributes['weight'] - string - contains the user weight
       * $this->orders - Order[] - contains the associated diets
    */

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'age',
        'weight',
        'comorbidities',
        'city',
        'address',
        'document',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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

    public function getEmail()
    {
        return $this->attributes['email'];
    }

    public function setEmail($email)
    {
        $this->attributes['email'] = $email;
    }

    public function getPassword()
    {
        return $this->attributes['password'];
    }

    public function setPassword($password)
    {
        $this->attributes['password'] = $password;
    }

    public function getCity()
    {
        return $this->attributes['city'];
    }

    public function setCity($city)
    {
        $this->attributes['city'] = $city;
    }

    public function getAddress()
    {
        return $this->attributes['address'];
    }

    public function setAddress($address)
    {
        $this->attributes['address'] = $address;
    }

    public function getPhone()
    {
        return $this->attributes['phone'];
    }

    public function setPhone($phone)
    {
        $this->attributes['phone'] = $phone;
    }

    public function getDocument()
    {
        return $this->attributes['document'];
    }

    public function setDocument($document)
    {
        $this->attributes['document'] = $document;
    }

    public function getAge()
    {
        return $this->attributes['age'];
    }

    public function setAge($age)
    {
        $this->attributes['age'] = $age;
    }

    public function getWeight()
    {
        return $this->attributes['weight'];
    }

    public function setWeight($weight)
    {
        $this->attributes['weight'] = $weight;
    }

    public function getComordities()
    {
        return $this->attributes['comorbidities'];
    }

    public function setComordities($comorbidities)
    {
        $this->attributes['comorbidities'] = $comorbidities;
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

    public function diets()
    {
        return $this->hasMany(Diet::class);
    }

    public function getDiets()
    {
        return $this->diets;
    }

    public function setDiets($diets)
    {
        $this->diets = $diets;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

     protected $table = "orders"; 

    protected $fillable = [
        'ItemName',
        'ItemPrice',
        'ItemQty',
        'RecName',
        'Phone',
        'Location',
        'PayOpt',
        'UserId'

    ];
    

    public function Menu(){
        return $this->hasMany(Food::class);
    }

    public function User(){
        return $this->hasMany(Orders::class);
    }

    
}

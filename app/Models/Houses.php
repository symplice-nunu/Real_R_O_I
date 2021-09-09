<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houses extends Model
{
    use HasFactory;
    protected $fillable = [
        'houseid', 'city', 'numberofroom', 'numberofsaloons', 'numberoftb', 'numberofkitchen', 'extrahouses', 'houselocation', 'price', 'housedescription', 'houseimage', 'saloonimage', 'roomimage'
    ];

    protected $table="houses";
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stripee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'cardnumber', 'cvc', 'expirationmonth', 'expirationyear', 'price'
    ];

    protected $table="stripe";
    
}

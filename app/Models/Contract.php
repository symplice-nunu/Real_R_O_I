<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'empname', 'emptitle', 'buyername', 'houseid', 'paymenttype', 'location'
    ];

    protected $table="contract";
}

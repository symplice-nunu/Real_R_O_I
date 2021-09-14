<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public $fillable = [
        'houseid', 'name', 'email', 'phone', 'title', 'application'
    ];

    protected $table = 'application';
}

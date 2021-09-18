<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Product extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    
    protected $fillable = [
        'houseid', 'city', 'numberofroom', 'numberofsaloons', 'numberoftb', 'numberofkitchen', 'extrahouses', 'houselocation', 'invested', 'price', 'housedescription', 'houseimage', 'saloonimage', 'roomimage'
    ];
}
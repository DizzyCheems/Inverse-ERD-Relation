<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    
    protected $fillable = 
    [
        'item_id',
        'name',
        'shirt_name',
        'shirt_number',
    ];     
    protected $guarded = [];
    public function item()
    {
      return $this->hasMany(Item::class);
    }
}

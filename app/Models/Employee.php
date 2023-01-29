<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'firstname',
        'lastname',
        'contact',
        'role',
    ];
    protected $guarded = [];
    public function item()
    {
      return $this->belongsTo(Item::class);
    }
}

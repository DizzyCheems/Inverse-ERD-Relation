<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'member_id',
        'name',
        'labor_tailor',
        'labor_cutter',
        'labor_heatpress',
        'cost_tailor',
        'cost_cutter',
        'cost_heatpress',
        'price',
        'category',
    ];      
    protected $guarded = [];
    public function member()
    { 
        return $this->belongsTo(Member::class);
    }
}

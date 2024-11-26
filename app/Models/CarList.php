<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand', 'model', 'engine','price_per_day','image','status'
    ];

    public function driver(){
        return $this->hasMany(Driver::class);
    }
}

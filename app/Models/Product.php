<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'foto',
        'user_id',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
    
}

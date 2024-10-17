<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = "types";
    protected $fillable = ["nama"];

    public function menu(){
        return $this->hasMany(Product::class);
    }
}

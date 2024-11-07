<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class major extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", 
        "image"
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}

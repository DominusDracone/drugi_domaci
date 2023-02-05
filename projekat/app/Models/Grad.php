<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grad extends Model
{
    use HasFactory;

    public function hotels(){
        return $this->hasMany(Hotel::class);
    }

    protected $fillable = [
        'ime',
        'populacija',
        'drzava',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function grads(){
        return $this->belongsTo(Grad::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

    protected $fillable = [
        'ime',
        'brZvezdica',
    ];
}

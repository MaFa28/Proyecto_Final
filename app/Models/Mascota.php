<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','tipomascota', 'raza','edad'];

    //protected $guarded = [];
    //public $timestamp = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function citas(){
        return $this->belongsToMany(Cita::class);
    }
}

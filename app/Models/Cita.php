<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'user_id','correo', 'telefono', 'tipomascota', 'raza','comentario'];

    //protected $guarded = [];
    //public $timestamp = false;

    public function user(){
        return $this->belongsTo(User::class);
    }
}

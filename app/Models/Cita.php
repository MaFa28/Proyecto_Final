<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cita extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nombre', 'user_id','correo', 'telefono', 'tipomascota', 'raza','comentario'];

    //protected $guarded = [];
    //public $timestamp = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function mascotas(){
        return $this->belongsToMany(Mascota::class);
    }
}

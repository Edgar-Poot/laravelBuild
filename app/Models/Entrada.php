<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entrada extends Model
{
    use HasFactory;
    //protected $table="entradas";
    //protected $primaryKey = 'id';
    protected $fillable = ['titulo', 'tag', 'contenido', 'user_id'];

    //Una entrada puede tener muchos comentarios 1:N.
    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    //Muchas entradas pertenecen a un usuario N:1 (Un usuario tiene muchas entradas).
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

/**
 * php artisan tinker
 * $entrada = new App\Models\Entrada();
 * $entrada->titulo="Primera entrada";
 * $entrada->tag="Noticias";
 * $entrada->contenido="Contenido de la primera entrada";
 * $entrada->imagen="imagen.png";
 * $entrada->user_id=1;
 * $entrada->save();
 * User::with('entradas')->get()->toArray();
 */

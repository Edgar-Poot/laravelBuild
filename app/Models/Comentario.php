<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['contenido', 'entrada_id', 'user_id'];

    //Un comentario pertenece a una entrada
    public function entrada()
    {
        return $this->belongsTo(Entrada::class, 'entrada_id');
    }

    //Un comentario pertenece a un usuario
    public function usuario()
    {
        $this->belongsTo(User::class, 'user_id');
    }
}

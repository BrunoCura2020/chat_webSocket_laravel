<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public function users() {
        //Se utiliza belongsToMany porque el chat esta relacionado con varios user: muchos a muchos
        return $this->belongsToMany('App\Models\User');
    }

    //Se utiliza hasMany porque el chat tiene muchos mensajes: uno a muchos
    public function messages() {
        return $this->hasMany('App\Models\Message');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Parroquia extends Model
{
    public function user(){
        return $this->hasMany('App\User', 'user_parroquia_fk', 'id_parroquia');
    }
    public function municipio(){
        return $this->belongsTo('App\Municipio', 'municipio_parroquia_fk', 'id_municipio');
    }
}

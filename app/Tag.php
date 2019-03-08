<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Table a la que va heredar
    protected $table="tags";  
   // Campos que se quieren mostrar
    protected $fillable=['name'];

   //Creando relaciones many to many 
      public function articles()
    {
        return $this->belongsToMany('App\Article')->withTimestamps();
    }

}

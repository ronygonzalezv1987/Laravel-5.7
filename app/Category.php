<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   /*Table a la que va heredar*/
    protected $table="categories";  
   
   /* Campos que se quieren mostrar*/
    protected $fillable=['name'];
   
    /*Creando relaciones en el modelo de one to many*/
      public function articles()
    {
        return $this->hasMany('App\Article');
    }
}

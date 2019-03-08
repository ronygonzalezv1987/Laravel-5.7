<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{//Table a la que va heredar
    protected $table="images";  
   // Campos que se quieren mostrar
    protected $fillable=['name','article_id'];

     /*Creando relaciones en el modelo de one to one contrario a One to Many */
     public function user()
    {
        return $this->belongsTo('App\Article');
    } 
}

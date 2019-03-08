<?php
namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
//use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;


class Article extends Model 
{ use Sluggable;
  
//Table a la que va heredar
    protected $table="articles";  
   // Campos que se quieren mostrar
    protected $fillable=['title','content','category_id','user_id'];

    //Creado un la funcion que va a retornar sluggable
    public function sluggable():array
    {
        return ['slug' => ['source' => 'title']];
    }

   /*Creando relacione de one to One contrario a One to Many */
      public function category()
    {
        return $this->belongsTo('App\Category');
    } 

      public function user()
    {
        return $this->belongsTo('App\User');
    } 

     /*Creando relaciones en el modelo de one to many*/
      public function images()
    {
        return $this->hasMany('App\Image');
    }

   /*Creando relaciones many to many */
      public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}

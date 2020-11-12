<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{


    protected $guarded=[];


    public function episodes(){
        return $this->hasMany(Episode::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Categorie::class,'categorie_show');
    }
}

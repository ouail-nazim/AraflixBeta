<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function shows()
    {
        return $this->belongsToMany(Show::class,'categorie_show');
    }
}

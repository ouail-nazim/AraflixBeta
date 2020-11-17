<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public function show()
    {
        return $this->belongsTo(Show::class);
    }

    public function lastOne($season){
        $episode=Episode::orderBy('number','DESC')
            ->where('show_id',$this->show->id)
            ->where('season',$season)
            ->first();

       if ($this->id == $episode->id){
           return true;
       }else{
           return false;
       }


    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['name'];


    public function photos(){
        return $this->hasMany(Photo::class);
    }


    public function delete(){
        foreach($this->photos as $photo){
            $photo->delete();
        }
        parent::delete();
    }
    
}

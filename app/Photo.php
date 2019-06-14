<?php

namespace App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function delete(){
        Storage::delete($this->photo);
        parent::delete();
    }
}

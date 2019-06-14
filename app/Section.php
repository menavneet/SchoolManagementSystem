<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable =['title'];
    
    public function delete(){
        Page::find($this->page_id)->delete();
        parent::delete();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable =['title'];
    
    public function sections(){
        return $this->hasMany(Section::class);
    }

    public function countSection(){
       return $this->sections()->count();
    }
    

    public function delete(){
        $a=Page::find($this->page_id);
        $a->delete();        
            foreach($this->sections as $section)
            {$section->delete();}
        parent::delete();
    }
}

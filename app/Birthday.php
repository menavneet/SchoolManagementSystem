<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Birthday extends Model
{
    public function delete()
    {
        Storage::delete($this->photo);
        parent::delete();
    }
}

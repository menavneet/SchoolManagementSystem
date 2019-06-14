<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Download extends Model
{
    public function delete()
    {
        Storage::delete($this->file);
        parent::delete();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    public function studies()
    {
        return $this->hasMany(Study::class);
    }
}

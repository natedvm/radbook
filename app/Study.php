<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    //
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}

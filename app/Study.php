<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    //
    public function patient()
    {
        $this->belongsTo(Patient::class);
    }
}

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

    public static function returnColumnHeaders()
    {
        $temp = new Study();
        $headers = \Schema::getColumnListing($temp->getTable());
        return $headers;
    }

    public static function convertToDisplayFormat($header)
    {
        $header = str_replace('_',' ',$header);
        $header = ucfirst($header);
        return $header;
    }
}

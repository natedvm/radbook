<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;

class StudyController extends Controller
{
    //

    public function index()
    {
        $headers = Study::returnColumnHeaders();
        $studies = Study::all();
        return view('main', ['studies' => $studies, 'headers' => $headers]);
    }
}

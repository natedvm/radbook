<?php

namespace App\Http\Controllers;

use DebugBar\DebugBar;
use Illuminate\Http\Request;
use App\Study;

class StudyController extends Controller
{
    //

    public function index()
    {
        if(\Auth::user()->doctor){
           return redirect('doctor');
        }
        if(\Auth::user()->coordinator){
            return redirect('coordinator');
        }
        return view('main');
    }

    public function doctorIndex(){
        $studies = Study::all();
        $headers = Study::returnColumnHeaders();

        return view('doctor',['headers' => $headers, 'studies' => $studies]);
    }

    public function coordinatorIndex()
    {
        $studies = Study::all();
        $headers = Study::returnColumnHeaders();

        return view('coordinator',['headers' => $headers,'studies' => $studies]);

    }
}

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
        else{
            return redirect('coordinator');
        }
    }

    public function doctorIndex(){
        $studies = Study::all();

        return view('doctorIndex',['studies' => $studies]);
    }

    public function coordinatorIndex()
    {
        $studies = Study::all();
        $headers = Study::returnColumnHeaders();

        return view('coordinatorIndex',['headers' => $headers,'studies' => $studies]);

    }

    public function doctorEdit($id)
    {
        return view('doctorEdit');
    }

    public function coordinatorEdit($id){
        return view('coordinatorEdit');
    }

    public function doctorView($id){
        return view('doctorView');
    }

    public function coordinatorView($id){
        return view('coordinatorView');
    }

    public function coordinatorAdd($patient_id = null)
    {
        return view('coordinatorAdd','patient_id' = $patient_id);
    }

    public function postCoordinatorAdd()
    {

    }
}

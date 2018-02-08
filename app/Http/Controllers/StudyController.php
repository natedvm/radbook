<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;

class StudyController extends Controller
{
    //

    public function index()
    {
        if (\Auth::user()->doctor) {
            return redirect('doctor');
        } else {
            return redirect('coordinator');
        }
    }

    public function doctorIndex()
    {
        $studies = Study::all();

        return view('doctorIndex', ['studies' => $studies]);
    }

    public function coordinatorIndex()
    {
        $studies = Study::all();

        return view('coordinatorIndex', ['studies' => $studies]);

    }

    public function doctorEdit($id)
    {
        return view('doctorEdit');
    }

    public function coordinatorEdit($id)
    {
        $study = Study::find($id);
        return view('coordinatorEdit',['study' => $study]);
    }

    public function doctorView($id)
    {
        return view('doctorView');
    }

    public function coordinatorView($id)
    {
        return view('coordinatorView');
    }

    public function coordinatorAdd($patient_id = null)
    {
        if ($patient_id) {
            return view('coordinatorAdd', ['patient_id' => $patient_id]);
        } else {
            redirect();
        }
    }

    public function postCoordinatorAdd()
    {

    }
}

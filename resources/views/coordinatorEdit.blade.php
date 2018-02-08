@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-3">
                            Name: {{$study->patient->patient_name . ' ' . $study->patient->last_name}}
                        </div>
                        <div class="col-md-3">
                            DOB: {{$study->patient->date_of_birth}}
                        </div>
                        <div class="col-md-3">
                            Breed: {{$study->patient->breed}}
                        </div>
                        <div class="col-md-3">
                            Sex: {{$study->patient->sex}}
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="date_entered">Date Entered</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="date_entered" placeholder="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
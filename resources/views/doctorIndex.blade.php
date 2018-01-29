@extends ('layouts.app')

@section('pagescript')
    <script type="text/javascript" src="{{asset('js/doctorIndex.js')}}"></script>
@endsection

@section('content')
    <div class="container">
        This is the doctor page
        <div class="row">
            <div class="col-lg-12">
                <table id="studyTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="dvmax_id">
                            DVMax ID
                        </th>
                        <th class="patient_name">
                            Name
                        </th>
                       <th class="doctor_assigned">
                            Doctor
                        </th>
                        <th class="date_entered">
                            Date Entered
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($studies as $study)
                        <tr ondblclick="window.location='{{route('doctorEdit',['id' => $study->id])}}'">
                            <td>
                                {{$study->patient->dvmax_id}}
                            </td>
                            <td>
                                {{$study->patient->patient_name . ' ' . $study->patient->last_name}}
                            </td>
                            <td>
                                {{$study->doctor_assigned}}
                            </td>
                            <td>
                                {{$study->date_entered}}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
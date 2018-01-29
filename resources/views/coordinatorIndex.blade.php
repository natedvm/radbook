@extends ('layouts.app')

@section('pagescript')
    <script type="text/javascript" src="{{asset('js/coordinatorIndex.js')}}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="studyTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="dvmax_id">
                            DVMax ID
                        </th>
                        <th class="patient_name">
                            Patient Name
                        </th>
                        <th class="last_name">
                            Last Name
                        </th>
                        <th class="doctor_name">
                            Doctor Name
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($studies as $study)
                        <tr ondblclick="window.location='{{route('coordinatorEdit',['id' => $study->id])}}'">
                            <td>
                                {{$study->patient->dvmax_id}}
                            </td>
                            <td>
                                {{$study->patient->patient_name}}

                            </td>
                            <td>
                                {{$study->patient->last_name}}

                            </td>
                            <td>
                                {{$study->doctor_name}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
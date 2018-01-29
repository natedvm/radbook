@extends ('layouts.app')

@section('pagescript')
    <script type="text/javascript" src="{{asset('js/coordinatorIndex.js')}}"></script>
@endsection

@section('content')
    <div class="container">
        This is the coordinator page
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
                        @foreach($headers as $header)
                            <th class="{{$header}}">
                                {{ App\Study::convertToDisplayFormat($header)}}
                            </th>
                        @endforeach
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($studies as $study)
                        <tr ondblclick="window.location='#'">
                            <td>
                                {{$study->patient->dvmax_id}}
                            </td>
                            <td>
                                {{$study->patient->patient_name}}

                            </td>
                            <td>
                                {{$study->patient->last_name}}

                            </td>
                            {{--TODO - add link to correct edit study locaiton--}}
                            @foreach($study->getAttributes() as $data)
                                <td>
                                    {{$data}}
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
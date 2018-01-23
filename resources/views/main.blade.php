@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="studyTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        @foreach($headers as $header)
                            <th id="{{$header}}_header">
                                {{ App\Study::convertToDisplayFormat($header)}}
                            </th>
                        @endforeach
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($studies as $study)
                        <tr ondblclick="window.location='#'">
                            {{--TODO - add link to correct edit study locaiton--}}
                            @foreach($study->toArray() as $data)
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
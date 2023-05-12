@extends('layouts/main')

@section('content')

{{-- foreach che visualizza ogni treno in una tabella --}}

<table id="train-table" class="table ">
    <thead>
        <th>Azienda</th>
        <th>Stazione di partenza</th>
        <th>Stazione di arrivo</th>
        <th>In orario</th>
    </thead>

    <tbody> 
        
        @foreach($trains as $singleTrain)

            <tr class="{{$singleTrain->is_cancelled ? 'cancelled' : ''}}">

                <td>{{$singleTrain->company}}</td>
                <td>{{$singleTrain->departure_station}}</td>
                <td>{{$singleTrain->arrival_station}}</td>
                <td>{{$singleTrain->is_on_time ? 'in orario' : 'in ritardo'}}</td>
                
            </tr>
            
        @endforeach
    </tbody>
</table>

@endsection
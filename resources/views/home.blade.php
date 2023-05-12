@extends('layouts/main')

@section('content')

{{-- foreach che visualizza ogni treno in una tabella --}}

<table class="table">
    <thead>
        <th>Azienda</th>
        <th>Stazione di partenza</th>
        <th>Stazione di arrivo</th>
        <th>Orario Partenza</th>
        <th>Orario Arrivo</th>
    </thead>

    <tbody> 
        
        @foreach($trains as $singleTrain)
            <tr>
                <td>{{$singleTrain->company}}</td>
                <td>{{$singleTrain->departure_station}}</td>
                <td>{{$singleTrain->arrival_station}}</td>
                @php
                    $dateTime = new DateTime($singleTrain->departure_time);
                @endphp
                <td>{{$dateTime->format('i:h d/m/Y')}}</td>
                <td>{{$singleTrain->arrival_time}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
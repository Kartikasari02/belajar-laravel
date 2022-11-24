@extends('layout')

@section('title', 'Perserta Didik Page')

@section('content')
    <div> 
       <table cellpadding=10 cellspacing=0 border=1>
            <tr>
                <th>Id</th>
                <th>namaprestasi</th>
                <th>tingkat</th>
                <th>juarake</th>
                <th>namapeserta</th>
               
            </tr>
            @foreach($data as $person)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$person->namaprestasi}}</td>
                <td>{{$person->tingkat}}</td>
                <td>{{$person->juarake}}</td>
                <td>{{$person->namapeserta}}</td>
            </tr> 
            @endforeach
        </table>
    </div>
@endsection

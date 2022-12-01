@extends('layout')

@section('title', 'Konsumen Page')

@section('content')
    <div> 
       <table cellpadding=10 cellspacing=0 border=1>
            <tr>
                <th>Id</th>
                <th>namalengkap</th>
                <th>jk</th>
                <th>umur</th>
                <th>Waktu Entri</th>
            </tr>
            @foreach($data as $person)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$person->namalengkap}}</td>
                <td>{{$person->jk}}</td>
                <td>{{$person->umur}}</td>
                <td>{{$person->created_at}}</td>
            </tr> 
            @endforeach
        </table>
    </div>
@endsection
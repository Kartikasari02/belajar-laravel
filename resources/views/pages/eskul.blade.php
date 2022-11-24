@extends('layout')

@section('title', 'Eskul Page')

@section('content')
    <div> 
       <table cellpadding=10 cellspacing=0 border=1>
            <tr>
                <th>Id</th>
                <th>namaeskul</th>
                <th>namapembina</th>
                <th>jumlahanggota</th>
                
            </tr>
            @foreach($data as $person)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$person->namaeskul}}</td>
                <td>{{$person->namapembina}}</td>
                <td>{{$person->jumlahanggota}}</td>
        
            </tr> 
            @endforeach
        </table>
    </div>
@endsection
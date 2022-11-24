@extends('layout')

@section('title', 'Perserta Didik Page')

@section('content')
    <div> 
       <table cellpadding=10 cellspacing=0 border=1>
            <tr>
                <th>Id</th>
                <th>nis</th>
                <th>namalengkap</th>
                <th>jk</th>
                <th>kelas</th>
                <th>alamat</th>
                <th>status</th>
            </tr>
            @foreach($data as $person)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$person->nis}}</td>
                <td>{{$person->namalengkap}}</td>
                <td>{{$person->jk}}</td>
                <td>{{$person->kelas}}</td>
                <td>{{$person->alamat}}</td>
                <td>{{$person->status}}</td>
            </tr> 
            @endforeach
        </table>
    </div>
@endsection
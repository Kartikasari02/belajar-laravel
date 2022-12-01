@extends('layout')

<<<<<<<< HEAD:resources/views/pages/pesertadidik.blade.php
@section('title', 'Perserta Didik Page')
========
@section('title', 'Konsumen Page')
>>>>>>>> b3ef6f7d11a59f23ce42b0cb3e021ef4715dbf10:resources/views/pages/konsumen.blade.php

@section('content')
    <div> 
       <table cellpadding=10 cellspacing=0 border=1>
            <tr>
                <th>Id</th>
<<<<<<<< HEAD:resources/views/pages/pesertadidik.blade.php
                <th>nis</th>
                <th>namalengkap</th>
                <th>jk</th>
                <th>kelas</th>
                <th>alamat</th>
                <th>status</th>
========
                <th>namalengkap</th>
                <th>jk</th>
                <th>umur</th>
                <th>Waktu Entri</th>
>>>>>>>> b3ef6f7d11a59f23ce42b0cb3e021ef4715dbf10:resources/views/pages/konsumen.blade.php
            </tr>
            @foreach($data as $person)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$person->namalengkap}}</td>
                <td>{{$person->jk}}</td>
<<<<<<<< HEAD:resources/views/pages/pesertadidik.blade.php
                <td>{{$person->kelas}}</td>
                <td>{{$person->alamat}}</td>
                <td>{{$person->status}}</td>
========
                <td>{{$person->umur}}</td>
                <td>{{$person->created_at}}</td>
>>>>>>>> b3ef6f7d11a59f23ce42b0cb3e021ef4715dbf10:resources/views/pages/konsumen.blade.php
            </tr> 
            @endforeach
        </table>
    </div>
@endsection
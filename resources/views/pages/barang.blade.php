@extends('layout')

@section('title', 'Barang Page')

@section('content')
    <div> 
       <table cellpadding=10 cellspacing=0 border=1>
            <tr>
                <th>Id</th>
                <th>namabarang</th>
                <th>qty</th>
                <th>harga</th>
                <th>barcode</th>
                <th>Waktu Entri</th>
            </tr>
            @foreach($data as $person)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$person->namabarang}}</td>
                <td>{{$person->qty}}</td>
                <td>{{$person->harga}}</td>
                <td>{{$person->barcode}}</td>
                <td>{{$person->created_at}}</td>
            </tr> 
            @endforeach
        </table>
    </div>
@endsection
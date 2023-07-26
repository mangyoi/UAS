@extends('welcome')
@section('content')
<div>
    <h1>Pesanan - Admin</h1>
<table >
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor WhatsApp</th>
            <th>Email</th>
            <th>Bukti Pembayaran</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datas as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->no_wa }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->bukti_pembayaran }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection

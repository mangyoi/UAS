@extends('welcome')
@section('content')
<div class="container mt-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('admin.create') }}">Add Product</a>
            <div class="card">
                <div class="card-header">List Pesanan</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Whatsapp</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->no_wa }}</td>
                                <td>{{ $data->email }}</td>
                                <td><form action="{{ route('sepatu.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-trash bi bi-clipboard-check"></i>
                                    </button>
                                </form></td>
                                {{-- <td>{{ $data->bukti_pembayaran }}</td> --}}
                            </tr>

                        @endforeach
                        <a href="{{ route('sepatu.exportExcel') }}" class="btn btn-outline-success mb-3">
                            <i class="bi bi-download me-1"></i> to Excel
                        </a>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


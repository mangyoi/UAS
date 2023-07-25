
@extends('welcome')
@section('content')
<div>
  <div class="container">
      <h1>Pay</h1>
      <form action="{{route('sepatu.store')}}" method="POST">
          @csrf
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat lengkap anda">
        </div>
        <div class="form-group">
          <label for="no_wa">No Wa:</label>
          <input type="number" class="form-control" id="no_wa" name="no_wa" placeholder="Masukan no WhatsApp anda">
        </div>
        <div class="form-group">
          <label for="email">email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email anda">
        </div>
        <p>BCA 09429049209</p>
        <p>BRI 0912404009482</p>
        <div class="mb-3">
          <label for="formFile" class="form-label">masukan bukti pembayaran</label>
          <input class="form-control" type="file" id="formFile" name="formFile">
        </div>
        <button type="submit" class="btn btn-primary">Bayar</button>
      </form>
    </div>
</div>
@endsection

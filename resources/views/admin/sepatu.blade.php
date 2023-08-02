@extends('welcome')
@section('content')

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
<div class="container">
    <h1>Tambah Produk</h1>
    <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Nama Produk:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="price">Harga:</label>
        <input type="number" name="price" id="price" required>
        <br>
        <label for="image">Foto Produk:</label>
        <input type="file" name="image" id="image" required>
        <br>
        <button type="submit">Tambah</button>
    </form>
  </div>
</div>
@endsection


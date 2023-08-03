@extends('welcome')

@section('content')
    <div class="d-flex flex-wrap gap-4 justify-content-center mt-4">
        @foreach ($products as $product)
        <div class="card" style="width: 220px;">
            <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify"> {{ $product->name }} </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. {{ $product->price }}</p>
                <a class="btn btn-outline-primary" style="font-size: 24px" href="{{ route('sepatu.create',['id'=>$product->id]) }}">
                    <i class="bi bi-bag-check-fill"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection

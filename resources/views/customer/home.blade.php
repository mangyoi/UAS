@extends('welcome')
@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner mt-3">
      <div class="carousel-item active">
        <img src="{{Vite::asset('resources/images/slide/banner1.jpg')}}" alt="Gambar 1" class="d-block w-50 mx-auto">
      </div>
      <div class="carousel-item">
        <img src="{{Vite::asset('resources/images/slide/banner2.jpg')}}" alt="Gambar 2" class="d-block w-50 mx-auto">
      </div>
      <div class="carousel-item">
        <img src="{{Vite::asset('resources/images/slide/banner3.jpg')}}" alt="Gambar 3" class="d-block w-50 mx-auto">
      </div>
    </div>
    <button class="carousel-control-prev " type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

<h4 class="mt-5">Best Seller</h4>
    <div class="content mt-3 d-flex flex-lg-wrap gap-5 mb-5">
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="{{Vite::asset('resources/images/sepatugunung.jpeg')}}" alt="sepatu" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Sepatu Gunung </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 400.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="bi bi-bag-check-fill" oneclick="location.href='{{route('sepatu.create')}}'"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="{{Vite::asset('resources/images/70s.jpg')}}" alt="sepatu" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Sneakers </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 650.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="bi bi-bag-check-fill"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="{{Vite::asset('resources/images/astroboy.jpg')}}" alt="sepatu" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Astroboy shoes </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 8.400.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px" href="{{route('sepatu.create')}}">
                    <i class="bi bi-bag-check-fill"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="{{Vite::asset('resources/images/checkboard.jpg')}}" alt="sepatu" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Slip On </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 400.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="bi bi-bag-check-fill"></i>
                </button>
            </div>
        </div>

    </div>

    <h4 class="mt-5">New Product</h4>
    <div class="content mt-3 d-flex flex-lg-wrap gap-5 mb-5">
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="{{Vite::asset('resources/images/70s.jpg')}}" alt="sepatu" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify"> converse 70s </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 560.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="bi bi-bag-check-fill"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="{{Vite::asset('resources/images/70s.jpg')}}" alt="sepatu" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify"> converse 70s </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 560.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="bi bi-bag-check-fill"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="{{Vite::asset('resources/images/70s.jpg')}}" alt="sepatu" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify"> converse 70s </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 560.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px" >
                    <i class="bi bi-bag-check-fill"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="{{Vite::asset('resources/images/70s.jpg')}}" alt="sepatu" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify"> converse 70s </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 560.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="bi bi-bag-check-fill"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="{{Vite::asset('resources/images/70s.jpg')}}" alt="sepatu" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify"> converse 70s </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 560.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="bi bi-bag-check-fill"></i>
                </button>
            </div>
        </div>
    </div>
@endsection
<style>

</style>

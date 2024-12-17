@extends('layout')
@section('title', 'About Page')
@section('content')
    <div style="justify-content:center; align-items:center; display:flex; flex-direction:column">
        <h1>About Us</h1>
        <p>Ini adalah halaman about</p>


        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('image/BookStore.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('image/pikachu.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('image/snorlax.png') }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        @section('Button-1', 'Tentang Kami')
        @section('Content-1', "Ini Bagian Latar Belakang")
        @section('Button-2', 'Produk Yang DiSediakan ')
        @section('Content-2', "Ini Bagian Visi")
        @section('Button-3', 'Best Seller')
        @section('Content-3', "Ini Bagian Misi")
        @include('LayoutManager.Accordion')

@endsection
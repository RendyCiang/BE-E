@extends('layout')
@section('title', 'Home Page')
@section('content')
   <div> 
        <div style="justify-content:center; align-items:center; display:flex; flex-direction:column">
            <h1>Toko Buku</h1>
            <p>Toko Kesayangan Kita Semua</p>
            <img src="{{ asset('image/BookStore.jpg') }}" alt="" style="width: 50%;">
        </div>

        <br>

        <div class="card" style="width: 18rem;">
          @foreach ($books as $item)
            <img src="{{ asset('storage/book_images/'. $item->photo) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Title : {{ $item->title }}</h5>
              <p class="card-text"> Description : {{ $item->description }}</p>
              <p class="card-text">ISBN : {{ $item->isbn }}</p>
              <p class="card-text">Author : {{ $item->author }}</p>
              <p class="card-text">Genre : {{ $item->genre }}</p>
              <p class="card-text"> Price : {{ $item->price }}</p>
              <p class="card-text">Stock : {{ $item->stock }}</p>
            </div>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          @endforeach
          </div>

          <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/pikachu.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>

        <br></br>

        <div style="justify-content:start; align-items:flex-start; display:flex; flex-direction:column">
            @include('LayoutManager.Input', [
                'id' => 'username',
                'type' => 'email',
                'placeholder' => 'Masukkan Email',
                'name' => 'email',
                'label' => 'Email Input'
            ])

            @include('LayoutManager.Input', [
                'id' => 'password',
                'type' => 'password',
                'placeholder' => 'Masukkan password',
                'name' => 'password',
                'label' => 'password Input'
            ])
        </div>
    </div>
@endsection
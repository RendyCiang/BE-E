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
              <button type="button" class="btn btn-light">
                <a href="/edit-book/ {{  $item->id }}" class="card-link">Edit</a>
              </button>
              <form action="/delete/{{ $item->id }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">DELETE</button>
              </form>
            </div>
          @endforeach
          </div>

          
    </div>
@endsection
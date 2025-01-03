@extends('layout')
@section('title', 'Create Review')
@section('content')
   <div>
        <h1>Tampilin Review Dari Orang</h1>
        <div>
            @foreach ($books as $item)
            <h1>{{ $item->title }}</h1>

            <div>
                @if($item->reviews->isEmpty())
                    <p>Tidak ada yang review buku ini</p>
                @else
                    @foreach ($item->reviews as $review)
                        <strong>Nama Reviewer :</strong>
                        {{ $review->reviewer_nama }}
                        <br>
                        <strong>Rating :</strong>
                        {{ $review->rating }}
                        <br>
                        <strong>Review :</strong>
                        {{ $review->review }}
                        <br>

                    @endforeach
                @endif
            </div>
            
            @endforeach
        </div>

   </div>
@endsection
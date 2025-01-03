@extends('layout')
@section('title', 'Create Review')
@section('content')
   <div> 
        <h1>Create Review</h1>

        <form action="/post-review" method="POST">
            @csrf
            <label for="">Judul Buku</label>
            <select name="book_id" id="">
                <option value="">Pilih Buku Yang Ingin Di review</option>
                @foreach ($books as $item)
                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endforeach
            </select>

            <div class="mb-3">
                <label for="reviewer_nama" class="form-label">Nama Reviewer</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" name="reviewer_nama" value="{{ old("reviewer_nama") }}">
                  @error('reviewer_nama')
                      <div style="color: red">{{ $message }}</div>
                  @enderror
            </div>

            <div class="mb-3">
                <label for="review" class="form-label">Review</label>
                <textarea type="text" class="form-control"  aria-describedby="emailHelp" name="review" value="{{ old("review") }}">
                </textarea>
                @error('review')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="rating">Rating</label>
                <input type="number" class="form-control"  aria-describedby="emailHelp" name="rating" value="{{ old("rating") }}">
                @error('rating')
                      <div style="color: red">{{ $message }}</div>
                  @enderror
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
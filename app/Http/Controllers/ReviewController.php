<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index(){
        $books = Book::all();
        return view('reviews.index', compact('books'));
    }
    
    public function create(){
        $books = Book::all();
        return view('reviews.create', compact('books'));
    }

    function store(Request $request){
        $request->validate([
            'book_id' => 'required',
            'reviewer_nama' => 'required|min:5',
            'rating' => 'required|min:1|max:5',
            'review' => 'required|min:5'
        ], [
            'book_id.required' => 'Buku ID Tidak ada',
            'reviewer_nama.required' => 'Nama Reviewer Tidak Ada',
            'rating.required'=> 'Nama Reviewer Tidak Ada',
            'review.required' => 'Review harus ada'

        ]);
        
        Review::create([
            'book_id' => $request->book_id,
            'reviewer_nama' => $request->reviewer_nama,
            'rating' => $request->rating, 
            'review' => $request->review
        ]);

        return redirect('/show-review');
    }
}

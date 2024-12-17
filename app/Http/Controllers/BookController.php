<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getCreatePage(){
        return view('Books.createBook');
    }

    function getHomePage(){
        $books = Book::all();
        return view('home', compact('books'));
    }

    function createBook(Request $request){
        $request->validate([
            "title" => "required",
            "author" => "required",
            "isbn" => "required",
            "description" => "required",
            "genre" => "required",
            "price" => "required",
            "stock" => "required",
            "photo" => ["required"],
        ], [
            "title.required" => "Title is Required",
            "author.required" => "Author is Required",
            "isbn.required" => "ISBN is Required",
            "description.required" => "Description is Required",
            "genre.required" => "Genre is required",
            "price.required" => "Price is required",
            "stock.required" => "Stock is required",
            "photo.required" => "Photo is required"
        ]);

        $now = now()->format('Y-m-d_H.i.s');
        $filename = $now . '_' .  $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('book_images', $filename, 'public');

        Book::create([
            "title" => $request->title,
            "author" => $request->author,
            "isbn" => $request->isbn,
            "description" => $request->description,
            "genre" => $request->genre,
            "price" => $request->price,
            "stock" => $request->stock,
            "photo" => $filename
        ]);

        return redirect('/');
    }

    public function getEditPage($id){
        $book = Book::findOrFail($id);
        return view('editBook', compact('book'));
    }

    function updateBook(Request $request, $id){
        $request->validate([
            'title' => "required",
            'author' => 'required',
            'isbn' => 'required',
            "description" => "required",
            "genre" => "required",
            "price" => "required",
            "stock" => "required",
            "photo" => ["image"]
        ], [
            "title.required" => "Title is Required",
            "author.required" => "Author is Required",
            "isbn.required" => "ISBN is Required",
            "description.required" => "Description is Required",
            "genre.required" => "Genre is required",
            "price.required" => "Price is required",
            "stock.required" => "Stock is required",
        ]);

        $book = Book::findOrFail($id);
        if ($request->hasFile('photo')) {
            $now = now()->format('Y-m-d_H.i.s');
            $filename = $now . '_' .  $request->file('photo')->getClientOriginalName();
            $request->file('photo')->storeAs('book_images', $filename, 'public');
            $book->photo = $filename;
        }
        
        $book->update([
            "title" => $request->title,
            "author" => $request->author,
            "isbn" => $request->isbn,
            "description" => $request->description,
            "genre" => $request->genre,
            "price" => $request->price,
            "stock" => $request->stock,
            "photo" => $book->photo
        ]);

        return redirect('/');
    }

    function deteleBook($id){
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect(route('home'));
    }
}

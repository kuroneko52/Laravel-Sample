<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    //
    public function index()
    {
        $books = Book::with('author')->get();
        $authors = Author::all();
        return view('books.index', compact('books', 'authors'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author_id' => 'required|exists:authors,id',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index');
    }

}

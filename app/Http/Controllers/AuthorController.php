<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class AuthorController extends Controller
{
    //
    public function index()
    {
        $authors = Author::with('books')->get();
        $books = Book::all();
        return view('authors.index', compact('authors', 'books'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Author::create($request->all());
        return redirect()->route('authors.index');
    }
}

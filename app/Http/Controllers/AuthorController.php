<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class AuthorController extends Controller
{
    //show index page
    public function index()
    {
        //use with method to get books data
        $authors = Author::with('books')->get();
        $books = Book::all();
        return view('authors.index', compact('authors', 'books'));
    }

    //create
    public function create()
    {
        return view('authors.create');
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Author::create($request->all());
        return redirect()->route('authors.index')->with('success', 'Author created successfully.');
    }

    //edit
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    //update
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $author->update($request->all());
        return redirect()->route('authors.index')->with('success', 'Author updated successfully.');
    }

    //delete
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Author deleted successfully.');
    }
}

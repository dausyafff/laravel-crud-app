<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Book::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required|string|max:255",
            "author" => "required|string|max:255",
            "year" => "required|integer|min:1000|max:" . date('Y'),
            "stock" => "nullable|integer|min:0",
            "description" => "nullable|string"
        ]);

        $book = Book::create($data);
        return response()->json($book, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return response()->json($book);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view("books.edit", compact("book"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            "title" => "required|string|max:255",
            "author" => "required|string|max:255",
            "year" => "required|integer|min:1000|max:" . date('Y'),
            "stock" => "nullable|integer|min:0",
            "description" => "nullable|string"
        ]);
        $book->update($data);

        return response()->json($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json([
            "message" => "Book deleted successfully"
        ]);
    }
}

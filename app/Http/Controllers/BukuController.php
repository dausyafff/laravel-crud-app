<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Book::all();
        return view('book.index', [
            'title' => 'Buku',
            'active' => 'buku',
        ], compact("buku"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'pengarang' => 'required|max:255',
            'tahun_terbit' => 'required|integer',
        ]);
        Book::create($validated);
        return redirect()->route('book.index')->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = Book::all();
        $detail = Book::findOrFail($id);
        return view("book.index", [
            'title' => 'Buku',
            'active' => 'buku',
        ], compact("buku", "detail"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'pengarang' => 'required|max:255',
            'tahun_terbit' => 'required|integer',
        ]);
        Book::where('id', $id)->update($validated);
        return redirect()->route('book.index')->with('success', 'Buku berhasil diubah');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail = Book::findOrFail($id);
        $detail->delete();
        return redirect()->route('book.index')->with('success', 'Buku berhasil dihapus');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    // Menampilkan daftar buku
    public function index()
    {
        // Mengambil semua buku beserta data author-nya
        $books = Book::with('author')->get();

        // Kirim data ke view books.blade.php
        return view('books', compact('books'));
    }
}

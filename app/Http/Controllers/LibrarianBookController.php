<?php

namespace App\Http\Controllers;

use App\Book;

class LibrarianBookController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $books = Book::latest()->paginate(10);
        return view('librarian.book.index', compact('books'));
    }
}

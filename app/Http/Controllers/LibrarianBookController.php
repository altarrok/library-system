<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LibrarianBookController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $books = Book::latest('id')->paginate(10);
        $librarian = auth()->user()->librarian;
        return view('librarian.book.index', compact('books', 'librarian'));
    }

    public function create() {
        return view('librarian.book.create');
    }

    public function destroy(Book $book) {
        if (!$book->member) $book->delete();
        return Redirect::back();
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:books',
            'author' => 'required|string|max:255',
            'page_count' => 'required|integer|max:50000',
        ]);
        auth()->user()->librarian->books()->create($data);
        return redirect(route('librarian.book.index'));
    }

    public function return(Book $book) {
        if ($book->member) {
            $book->member()->dissociate();
            $book->taken_at = null;
            $book->save();
        }
        return Redirect::back();
    }
}

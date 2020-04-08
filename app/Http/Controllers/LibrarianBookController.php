<?php

namespace App\Http\Controllers;

use App\Librarian;

class LibrarianBookController extends Controller
{
    //

    public function index(Librarian $librarian) {
        return view('librarian.book.index');
    }
}

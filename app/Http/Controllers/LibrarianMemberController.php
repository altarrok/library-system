<?php

namespace App\Http\Controllers;

use App\Librarian;

class LibrarianMemberController extends Controller
{
    //
    public function index(Librarian $librarian) {
        return view('librarian.member.index');
    }
}

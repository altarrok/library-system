<?php

namespace App\Http\Controllers;

use App\User;

class LibrarianMemberController extends Controller
{
    //
    public function index() {
        $users = User::latest('id')->paginate(20);
        return view('librarian.member.index', compact('users'));
    }
}

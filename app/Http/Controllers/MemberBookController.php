<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MemberBookController extends Controller
{
    public function borrow() {
        return view('member.book.borrow');
    }

    public function borrowAction(Request $request) {
        $data = $request->validate([
           'id' => 'required|integer|exists:books,id'
        ]);

        $book = Book::find($data['id']);
        $book->member()->associate(auth()->user()->member);
        $book->taken_at = now()->format('d/m/y');
        $book->save();
        return redirect(route('member.index'));
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

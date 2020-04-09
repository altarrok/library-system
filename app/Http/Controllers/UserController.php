<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    //
    public function destroy(User $user) {
        $user->librarian->books()->delete();
        $user->member->books()->delete();
        $user->librarian()->delete();
        $user->member()->delete();
        $user->delete();
        return Redirect::back();
    }
}

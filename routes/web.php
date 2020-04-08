<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (auth()->user()) {
        return redirect(route('home'));
    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/member/{member}', 'MemberController@show')->name('member.show');

Route::get('/librarian/{librarian}', 'LibrarianController@show')->name('librarian.show');

Route::get('/librarian/{librarian}/book', 'LibrarianBookController@index')->name('librarian.book.index');
Route::get('/librarian/{librarian}/member', 'LibrarianMemberController@index')->name('librarian.member.index');

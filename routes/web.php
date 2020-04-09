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

Route::get('/librarian/book', 'LibrarianBookController@index')->name('librarian.book.index');
Route::get('/librarian/member', 'LibrarianMemberController@index')->name('librarian.member.index');
Route::get('/librarian/book/return/{book}', 'LibrarianBookController@return')->name('librarian.book.return');
Route::get('/member/book/borrow', 'MemberBookController@borrow')->name('member.book.borrow');
Route::post('/member/book/borrow', 'MemberBookController@borrowAction')->name('member.book.borrowAction');
Route::get('/member/book/return/{book}', 'MemberBookController@return')->name('member.book.return');

Route::delete('/user/{user}', 'UserController@destroy')->name('user.destroy');
Route::delete('/librarian/book/{book}', 'LibrarianBookController@destroy')->name('librarian.book.destroy');
Route::get('/librarian/book/create', 'LibrarianBookController@create')->name('librarian.book.create');
Route::post('/librarian/book', 'LibrarianBookController@store')->name('librarian.book.store');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/member', 'MemberController@index')->name('member.index');

Route::get('/librarian', 'LibrarianController@index')->name('librarian.index');


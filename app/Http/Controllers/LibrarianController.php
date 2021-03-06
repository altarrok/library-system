<?php

namespace App\Http\Controllers;

use App\Librarian;
use Illuminate\Http\Request;

class LibrarianController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $librarian = auth()->user()->librarian;
        return view('librarian.index', compact('librarian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Librarian  $librarian
     * @return \Illuminate\Http\Response
     */
    public function show(Librarian $librarian)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Librarian  $librarian
     * @return \Illuminate\Http\Response
     */
    public function edit(Librarian $librarian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Librarian  $librarian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Librarian $librarian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Librarian  $librarian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Librarian $librarian)
    {
        //
    }
}

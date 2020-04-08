@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-12">
            <h2>Welcome to Librarian Panel, <span class="font-weight-bold">{{ $librarian->user->name }}</span></h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4 offset-1"><a href="/librarian/{{ $librarian->id }}/book" class="btn btn-dark p-4" role="button"><span class="h1">Manage Books</span></a></div>
        <div class="col-4 offset-1"><a href="/librarian/{{ $librarian->id }}/member" class="btn btn-dark p-4" role="button"><span class="h1">Manage Members</span></a></div>
    </div>
</div>
@endsection

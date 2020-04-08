@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-12">
            <h2>Welcome to Member Panel, <span class="font-weight-bold">{{ $member->user->name }}</span></h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4 offset-1"><a href="/librarian/book" class="btn btn-dark p-4" role="button"><span class="h1">Borrow a Book</span></a></div>
        <div class="col-4 offset-1"><a href="/librarian/member" class="btn btn-dark p-4" role="button"><span class="h1">Return a Book</span></a></div>
    </div>
</div>
@endsection

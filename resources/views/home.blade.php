@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-4 offset-1">
            <a href="/librarian" class="btn btn-dark p-3" role="button"><h1>Librarian Panel</h1></a>
        </div>
        <div class="col-4 offset-1">
            <a href="/member" class="btn btn-dark p-3" role="button"><h1>Member Panel</h1></a>
        </div>
    </div>
</div>
@endsection

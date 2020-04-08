@extends('layouts.app')

@section('content')
<div class="container">
    {{ $librarian->user->name }}
</div>
@endsection

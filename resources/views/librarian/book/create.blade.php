@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row mb-3 justify-content-start">
        <div class="col-auto">
            <a href="/librarian" role="button" class="btn btn-secondary align-self-end"><span class="h3">
                    <svg class="bi bi-arrow-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 010 .708L3.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M2.5 8a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H3a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
</svg> Librarian Panel</span></a>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="form-group col-6">
        {!! Form::open(['route' => 'librarian.book.store']) !!}
        @csrf
{{--    fields: name, author, page_count--}}
        <label for="name">Book Name:</label>
        <input type="text" name="name" id="name" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror

        <label for="name">Author:</label>
        <input type="text" name="author" id="author" class="form-control mb-2 @error('author') is-invalid @enderror" value="{{ old('author') }}" required autocomplete="author" autofocus>
        @error('author')
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror

        <label for="name">Page Count:</label>
        <input type="text" name="page_count" id="page_count" class="form-control mb-2 @error('page_count') is-invalid @enderror" value="{{ old('page_count') }}" required autocomplete="page_count" autofocus>
        @error('page_count')
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-success mt-4"> Add Book </button>
        {!! Form::close() !!}

    </div>
    </div>
</div>
@endsection

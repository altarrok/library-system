@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row mb-3 justify-content-start">
        <div class="col-auto">
            <a href="/member" role="button" class="btn btn-secondary align-self-end"><span class="h3">
                    <svg class="bi bi-arrow-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 010 .708L3.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M2.5 8a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H3a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
</svg> Member Panel</span></a>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="form-group col-6">
        {!! Form::open(['route' => 'member.book.borrowAction']) !!}
        @csrf
{{--    fields: id --}}
        <label for="name">Book Id:</label>
        <input type="number" name="id" id="id" class="form-control mb-2 @error('id') is-invalid @enderror" value="{{ old('id') }}" required autocomplete="id" autofocus>
        @error('id')
        <div class="alert alert-danger" role="alert">Given book id does not exist on library database. Please contact to a Librarian.</div>
        @enderror

        <button type="submit" class="btn btn-success mt-4"> Borrow Book </button>
        {!! Form::close() !!}

    </div>
    </div>
</div>
@endsection
